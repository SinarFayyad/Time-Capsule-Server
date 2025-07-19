<?php

namespace App\Services;
use App\Models\Message;

class MessageService
{
    /**
     * Create a new class instance.
     */
    
    static function getMessages($id){
        if(!$id){
            return Message::all();
        }
        return Message::find($id);
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

