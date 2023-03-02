<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::controller(IndexController::class)->group(function() {
    Route::get("/", "index")->name('home');
    Route::get("/about", "about")->name('about');
    Route::get("/contact", "contact")->name('contact');
    Route::get("/login", "login")->name('login');
    Route::get('/registration', 'registration')->name('registration');
});

Route::controller(AuthController::class)->group(function() {
    Route::post('/registration', 'registration')->name('registration_action');
    Route::post('/login', 'login')->name('login_action');

    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(ArticleController::class)->group(function () {
    Route::get("/articles", "getArticles")->name('articles');
    Route::get('/articles/{article:slug}', 'show')->name('postDetails');
});

// Route::group(["prefix" => '/users', "controller" => UserController::class], function () {

// });