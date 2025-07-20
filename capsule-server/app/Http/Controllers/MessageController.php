<?php

namespace App\Http\Controllers;

use App\Services\MessageService;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller{
    
    function getMessages($id = null){

        $messages = MessageService::getMessages($id);

        return $messages?  $this->responseJSON($messages):
                           $this ->responseJSON (null , "Not found", 404);
    }

    function addMessage(Request $request){
        $message = new Message;
        $message = MessageService::addMessage($message, $request);
        return $this->responseJSON($message);
    }

    function deleteMessage ($id){
        $message = MessageService::deleteMessage($id);
        return $this->responseJSON($message);
    }

}
