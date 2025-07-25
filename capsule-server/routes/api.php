<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;


Route::group(["prefix" => "v0.1"], function(){
    Route::post("/login", [AuthController::class , "login"]);
    Route::post("/register", [AuthController::class , "register"]);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get("/user/{id}", [UserController::class , "getUser"]);
    Route::post("/updateUser/{id}", [UserController::class, "updateUser"]);

    Route::post("/addMessage", [MessageController::class, "addMessage"]);
    Route::get("/message/{id}", [MessageController::class, "getMessage"]);
    Route::get("/messages/{user_id?}", [MessageController::class, "getMessages"]);
    Route::get("/deleteMessage/{id}", [MessageController::class, "deleteMessage"]);
    Route::get("/getCapsules/{user_id}", [MessageController::class, "getCapsules"]); 
    // Route::post("/filterMessages", [MessageController::class , "filterMessages"]);
});