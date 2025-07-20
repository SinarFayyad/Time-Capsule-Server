<?php

namespace App\Services;
use App\Models\Message;

class MessageService
{
    static function getMessages($id){

        return $id? Message::find($id):
                    Message::where('privacy', 'public')->get();
 
    }

    static function addMessage($message , $data, $ip){

        $message->user_id = $data["user_id"];
        
        $message->mood =  $data["mood"];
        $message->title = $data["title"]; 
        $message->color = $data["color"];
        $message->media =  $data["media"];
        $message->audio =  $data["audio"];
        $message->message =  $data["message"];
        $message->privacy =  $data["privacy"];
        $message->location =  Location::get($ip);
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

