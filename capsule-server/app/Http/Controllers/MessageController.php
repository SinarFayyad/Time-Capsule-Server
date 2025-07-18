<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Message;
use App\Traits\ResponseTrait;

class MessageController extends Controller{
    

    function getAllMessages(){
        $messages = Message::all();
        
    }

    function addOrUpdateTask(Request $request, $id = null){
        if($id){
            $message = Message::find($id);
        }else{
            $message = new Message;
        }
        
        $message->user_id = 0;
        $message->title = $request["title"] || $task->title; 
        $message->message =  $id && !isset($request["description"]) ?  $task->title : $request["description"];
        $message->privacy = 0;
        $message->color =  $id && !isset($request["color"]) ? $task->title : $request["color"];
        $message->save();

        $response = [];
        $response["status"] = "success";
        $response["payload"] = $message;

        return json_encode($response, 200);
    }

}
