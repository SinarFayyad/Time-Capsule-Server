<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;

Route::post("/login", [AuthController::class , "login"]);
Route::post("/register", [AuthController::class , "register"]);
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);

Route::get("/user/{id}", [UserController::class , "getUser"]);
Route::post("/updateUser/{id}", [UserController::class, "UpdateUser"]);

Route::post("/addMessage", [MessageController::class, "addMessage"]);
Route::get("/messages/{id?}", [MessageController::class, "getMessages"]);
Route::get("/deleteMessage/{id}", [MessageController::class, "deleteMessage"]);

