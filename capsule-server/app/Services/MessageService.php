<?php

namespace App\Services;
use App\Models\Message;

class MessageService
{
    static function getMessages($id){

        return $id? Message::find($id):
                    Message::where('privacy', 'public')->get();
 
    }

    static function addMessage($message , $data){

        $message->user_id = $data["user_id"];
        $message->title = $data["title"]; 
        $message->color = $data["color"];
        $message->mood =  $data["mood"];
        $message->message =  $data["message"];
        $message->media =  $data["media"];
        $message->audio =  $data["audio"] ;
        $message->reveal_date =  $data["reveal_date"];
        $message->location =  $data["location"] ;
        $message->privacy =  $data["privacy"];

        $message->save();
        return $message;
    }
    
    static function deleteMessage($id){

        $message = Message::find($id);
        $message->delete();
        return $message;
    }
}

