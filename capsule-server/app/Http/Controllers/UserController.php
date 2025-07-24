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

    function updateUser(Request $request, $id){

        $user = UserService::getUser($id);
        $user = UserService::updateUser($request, $user);
        return $this->responseJSON($user);
    }
}
