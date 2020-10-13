<?php

namespace App\Services\Admin;

use App\Enums\UserStatus;
use App\Models\Company;
use App\Models\MemberCode;
use App\Models\User;
use App\Services\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Vinkla\Hashids\Facades\Hashids;

class UserService extends Service
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function queryList(object $params)
    {
        $requestData = page_limit($params->all());
        return $this->user->with(['roles', 'department.company', 'memberCode', 'profile'])->latest()->paginate($requestData['page_limit']);
    }

    public function store($params)
    {
        try {
            Log::info($params);
            $requestFilterData = $params->except(['role', 'company', 'department', 'member_code']);
            $requestFilterData['password'] = Hash::make($params->password);
            $user = DB::transaction(function () use ($requestFilterData, $params) {
                $user = $this->user->create($requestFilterData);
                // 绑定资料表
                $user->profile()->create(['birthday' => now()]);
                if ($params->has('sex')) {
                    $user->profile()->update(['sex' => $params->sex]);
                }
                // 注册会员码
                if ($params->filled('member_code')) {
                    $memberCode = MemberCode::whereCode($params->member_code)->firstOrFail();
                    $user->member_code_id = $memberCode->id;
                    $user->save();
                }
                // 绑定角色
                $user->assignRole($params->role);
                // 绑定部门-公司
                $department = $params->department;
                $company = Company::whereName($params->company)->with(['departments' => function ($query) use ($department) {
                    $query->whereName($department);
                }])->firstOrFail();
                $user->department_id = $company->departments[0]['id'];
                $user->save();
                return $user;
            });
            return $user;
        } catch (\Exception $e) {
            Log::error('用户新增失败', [
                'msg' => $e->getMessage()
            ]);
            return false;
        }
    }

    public function update($hash_id, $queries)
    {
        Log::info($queries);
        $id = Hashids::decode($hash_id)[0];
        try {
            $user = $this->user->find($id);
            DB::transaction(function() use($user, $queries) {
                $userData = $queries->only(['username', 'name', 'phone', 'email', 'status']);
                Log::info($userData);
                $user->update($userData);

                if ($queries->filled('sex')) {
                    $user->profile()->update(['sex' => $queries->sex]);   // 更新个人资料  sex
                }
                // 更新邀请码
                if ($queries->filled('member_code')) {
                    $memberCode = MemberCode::whereCode($queries->member_code)->firstOrFail();
                    $user->member_code_id = $memberCode->id;
                }
                // 更新角色
                if ($queries->role) {
                    $roles = $user->getRoleNames(); // 获取所有角色
                    if (!$roles->isEmpty()) {
                        $user->removeRole($roles[0]);
                    }
                    $user->assignRole($queries->role); // 添加新角色
                }

                // 更新公司 - 部门
                $department = $queries->department;
                $company = Company::whereName($queries->company)->with(['departments' => function($query) use ($department) {
                    $query->whereName($department);
                }])->firstOrFail();
                $user->department_id = $company->departments[0]['id'];
                $user->save();
                return $user;
            });
        } catch (\Exception $e) {
            Log::error('编辑用户资料失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $user->get();
    }

    public function destroy($username)
    {
        try {
            // 用户状态改为-1，禁用
            $user_info = $this->user->whereUsername($username);
            $user_info->update(['status' => UserStatus::Disabled]);
        } catch (\Exception $e) {
            Log::error('禁用用户资料失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }

    public function resetPassword($username, $requires)
    {
        try {
            $newPasswordHash = Hash::make($requires->newPassword);   // 密码加密
            $this->user->whereUsername($username)->update(['password' => $newPasswordHash]);  //更新密码
        } catch (\Exception $e) {
            Log::error('修改用户密码失败', ['message' => $e->getMessage()]);
            return false;
        }
        return true;
    }
}
