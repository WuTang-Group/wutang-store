<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InvitationCode;

class UserController extends Controller
{
    public function test(InvitationCode $invitationCode)
    {
        $test = $invitationCode::expiredCode()->full()->get();
        return response()->json(['data'=>$test]);
    }
}
