<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::controller(IndexController::class)->group(function() {
    Route::get("/", "index");
    Route::get("/about", "about");
    Route::get("/contact", "contact");
    Route::get("/blog", "blog");
    Route::get("/post-details", "postDetails");
});

// Route::group(["prefix" => '/users', "controller" => UserController::class], function () {

// });