<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

Route::group(["prefix" => "user"], function(){
    Route::get("/users", [UserController::class, "getUsers"]);
    Route::post("/add_update_user/{id?}", [UserController::class, "addOrUpdateUser"]);
});

Route::group(["prefix" => "message"], function(){
    Route::post("/add_update_message/{id?}", [MessageController::class, "addOrUpdateMessage"]);
    Route::get("/messages", [MessageController::class, "getMessages"]);
    Route::get("/remove_message", [MessageController::class, "removeMessages"]);
});
