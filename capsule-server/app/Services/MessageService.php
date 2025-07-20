<?php

namespace App\Services;
use App\Models\Message;

class MessageService
{
    static function getMessages($user_id){

        return $user_id? Message::find($user_id):
                         Message::where('privacy', 'public')->get();
 
    }

    static function addMessage($message , $data){

        $message->user_id = $data["user_id"];

        $message->mood =  $data["mood"];
        $message->title = $data["title"]; 
        $message->color = $data["color"];
        $message->media =  $data["media"];
        $message->audio =  $data["audio"];
        $message->message =  $data["message"];
        $message->privacy =  $data["privacy"];
        $message->location =  $data["location"];
        $message->reveal_date =  $data["reveal_date"];

        $message->save();
        return $message;
    }
    
    static function deleteMessage($id){

        $message = Message::find($id);
        $message->delete();
        return $message;
    }
}

