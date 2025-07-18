<?php

namespace App\Services;

class UserService
{
    /**
     * Create a new class instance.
     */
   static function getAllUsers($id = null){
        if(!$id){
            return User::all();
        }
        return User::find($id);
    }

    static function createOrUpdateUser($data, $user){
       
        $user->username = $data["username"] || $user->username; 
        $user->email = $data["email"] || $user->email;
        $user->password = bcrypt($data["password"] || $user->password);

        $user->save();
        return $user;
    }
}
