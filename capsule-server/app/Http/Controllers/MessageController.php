<?php

namespace App\Http\Controllers;

use Stevebauman\Location\Facades\Location;
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
        $ip = $request->ip(); 
        $location =Location::get($ip);
        
        $message = new Message;
        $message = MessageService::addMessage($message, $request, $location);
        return $this->responseJSON($message);
    }

    function deleteMessage ($id){
        $message = MessageService::deleteMessage($id);
        return $this->responseJSON($message);
    }

}
