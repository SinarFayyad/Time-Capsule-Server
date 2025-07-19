<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
// 2
class UserController extends Controller
{//4
    function getUsers(){
        $users = UserService::getUsers();
        return $this->responseJSON($users);
    }

    function addOrUpdateUser(Request $request, $id = null){
        
        if($id){
            $user = UserService::getUsers($id);
        }else{
            $user = new User;
        }

        $user = UserService::createOrUpdateUser($request, $user);
        return $this->responseJSON($user);
    }
}
