<?php

namespace App\Services;
use App\Models\User;

class UserService
{
    static function getUser($id){
        return User::find($id);
    }
    /**
     * Create a new class instance.
    */
    static function UpdateUser($data, $user){
       
        $user->username = $data["username"]? $data["username"]: $user->username; 
        $user->email = $data["email"]?$data["email"]:$user->email;
        $user->password = bcrypt($data["password"]|| $user->password);

        $user->save();
        return $user;
    }
}
