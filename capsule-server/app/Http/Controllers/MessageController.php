<?php

namespace App\Http\Controllers;

use App\Services\MessageService;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller{
    
    function getMessage($id)
    {
        $message = MessageService::getMessage($id);
        return $message?  $this->responseJSON($message):
                           $this ->responseJSON (null , "Not found", 404);
    }

    function getMessages($user_id = null){

        $messages = MessageService::getMessages($user_id);

        return $messages?  $this->responseJSON($messages):
                           $this ->responseJSON (null , "Not found", 404);
    }

    function getMessagesByMood ($mood)
    {
        $messages = MessageService:: getMessagesByMood($mood);
        return $messages?  $this->responseJSON($messages):
                $this ->responseJSON (null , "Not found", 404);
    }

    function getMessagesByCountry ($location)
    {
        $messages = MessageService:: getMessagesByMood($location);
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
