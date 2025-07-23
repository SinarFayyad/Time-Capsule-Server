<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
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
