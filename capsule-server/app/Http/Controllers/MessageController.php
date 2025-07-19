<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Message;
use App\Traits\ResponseTrait;

class MessageController extends Controller{
    

    function getAllMessages(){
        $messages = MessageService::getMessages();
        return $this->responseJSON($messages);
    }

    function addOrUpdateTask(Request $request, $id = null){
        if($id){
            $message = Message::find($id);
        }else{
            $message = new Message;
        }
        
        
        $message = MessageService::createOrUpdateMessage($request, $message);
        return $this->responseJSON($message);
    }

}
