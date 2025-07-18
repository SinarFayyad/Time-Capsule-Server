<?php

namespace App\Services\User;

use App\Models\Message;

class MessageService
{
    /**
     * Create a new class instance.
     */
    
    static function getAllMessages($id = null){
        if(!$id){
            return Message::all();
        }
        return Message::find($id);
    }

    static function createOrUpdateMessage($data, $message){
        $message->user_id = 0;
        $message->title = $data["title"] || $message->title; 
        $message->color = $data["color"] || $message->color ;
        $message->mood =  $data["mood"] ||  $message->mood;
        $message->message =  $data["message"] ||  $message->message ;
        $message->media =  $data["media"] ||  $message->media ;
        $message->audio =  $data["audio"] ||  $message->audio ;
        $message->reveal_date =  $data["reveal_date"] ||  $message->reveal_date;
        $message->location =  $data["location"] ||  $message->location ;
        $message->privacy =  $data["privacy"] ||  $message->privacy ;
        $message->save();
        return $message;
    }
    
}

