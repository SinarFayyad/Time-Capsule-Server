<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;

Route::post("/login", [AuthController::class , "login"]);
Route::post("/register", [AuthController::class , "register"]);

Route::get("/user/{id}", [UserController::class , "getUser"]);
Route::post("/update_user/{id?}", [UserController::class, "UpdateUser"]);

Route::get("/messages/{id?}", [MessageController::class, "getMessages"]);
Route::post("/add_message/{id?}", [MessageController::class, "addMessage"]);
Route::get("/delete_message/{id?}", [MessageController::class, "removeMessages"]);

