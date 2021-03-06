<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ResponseData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CodeRequest;

//use App\Models\InvitationCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 *  @group [ADMIN] Invitation
 * 邀请码
 * @package App\Http\Controllers\Admin
 */
class InvitationController extends Controller
{
    /*private $invitationCode;*/

    public function __construct()
    {
        /*        $this->invitationCode = $invitationCode;*/
        $this->middleware('role:admin',['except'=>'test']);
    }

    public function test()
    {
        dd(123);
    }

    public function test2()
    {
        dd('test2');
    }

    /**
     *「ADMIN」Get invitation code
     * 获取邀请码
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    /*    public function genInvitation()
        {
            return response()->json(ResponseData::requestSuccess(Str::random(6)));
        }*/

    /**
     * Get user phone
     * 获取用户的手机号
     * @queryParam page 页码
     * @queryParam page_limit 页数
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    /*    public function get_user(Request $request)
        {
            $requestArr = page_limit($request);
            $phone = $requestArr->phone;
            if ($phone) {
                $res = User::where('phone', 'like', '%' . $phone . '%')
                    ->where('status', 1)
                    ->select('id', 'phone')
                    ->paginate($requestArr->page_limit);
            } else {
                $res = User::where('status', 1)
                    ->select('id', 'phone')
                    ->paginate($requestArr->page_limit);
            }
            return response()->json(ResponseData::requestSuccess($res));
        }*/

    /**
     * bind code
     * 绑定用户与邀请码
     * @queryParam phone required 手机号
     * @queryParam code required 邀请码
     * @param CodeRequest $codeResquest
     * @return \Illuminate\Http\JsonResponse
     */
    /*    public function bindCode(CodeRequest $codeResquest)
        {
            $phone = $codeResquest->phone;
            $code = $codeResquest->code;
            $user_id = User::where('phone', $phone)->value('id');
            InvitationCode::updateOrInsert(['user_id'=>$user_id],
                ['code'=>$code, 'valid_until'=>'2037-12-21 12:09:02']);
            return response()->json(ResponseData::requestSuccess());
        }*/
}
