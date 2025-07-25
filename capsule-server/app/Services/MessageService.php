<?php

namespace App\Services;
use App\Models\Message;

class MessageService
{
    static function getCapsules($user_id){

        return Message::where('user_id', $user_id)
                            ->where('reveal_date', '>', now()->toDateString())
                            ->get();
    }

    static function getMessage($id){
        return Message::find($id);
    }

    static function getMessages($user_id= null){

        if ($user_id){
            return Message::where('user_id', $user_id)
                            ->where('reveal_date', '<=', now()->toDateString())
                            ->get();
        }else{ 
            return Message::where('privacy', 'public')
                     ->where('reveal_date', '<=', now()->toDateString())
                     ->get(); 
        }
    }

    // static function filterMessages($data)
    // {
    //     $mood= $data["mood"];
    //     $location =$data["location"];

    //     $query = MessageService::getMessages();
        
    //     if ($mood !== null){
    //         $query = $query->where('mood', $mood);
    //     }
    //     if ($location !== null){
    //         $query = $query->where('location', $location);
    //     }
    //     return $query;
    // } filtration handled on the frontend

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

