<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Models\User;
// 2
class UserController extends Controller
{//4
    function getUser($id){
        $user = UserService::getUser($id);
        return $this->responseJSON($user);
    }

    function UpdateUser(Request $request, $id){

        $user = UserService::getUser($id);
        $user = UserService::UpdateUser($request, $user);
        return $this->responseJSON($user);
    }
}
