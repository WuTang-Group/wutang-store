<?php

namespace App\Services\Admin;

use App\Enums\UserStatus;
use App\Models\Company;
use App\Models\MemberCode;
use App\Models\User;
use App\Services\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
                if ($params->has('member_code')) {
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

    public function update($username, $queries)
    {
        try {
            $user_info = $this->user->whereUsername($username);
            $user_info->update($queries);
        } catch (\Exception $e) {
            Log::error('编辑用户资料失败', ['message' => $e->getMessage()]);
            return false;
        }
        return $user_info->get();
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
