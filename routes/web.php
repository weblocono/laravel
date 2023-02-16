<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::controller(IndexController::class)->group(function() {
    Route::get("/", "index")->name('home');
    Route::get("/about", "about")->name('about');
    Route::get("/contact", "contact")->name('contact');
    Route::get("/blog", "blog")->name('blog');
    Route::get("/post-details", "postDetails")->name('postPage');

    Route::get("/login", "login")->name('login');
    Route::get('/registration', 'registration')->name('registration');
});

Route::controller(AuthController::class)->group(function() {
    Route::post('/registration', 'registration')->name('registration_action');
    Route::post('/login', 'login')->name('login_action');

    Route::get('/logout', 'logout')->name('logout');

});

// Route::group(["prefix" => '/users', "controller" => UserController::class], function () {

// });