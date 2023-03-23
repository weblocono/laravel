<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;

Route::controller(IndexController::class)->group(function () {
    Route::get("/", "index")->name('home');
    Route::get("/about", "about")->name('about');
    Route::get("/contact", "contact")->name('contact');
    Route::get("/login", "login")->name('login');
    Route::get('/registration', 'registration')->name('registration');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/registration', 'registration')->name('registration_action');
    Route::post('/login', 'login')->name('login_action');

    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(ArticleController::class)->group(function () {
    Route::get("/articles", "getArticles")->name('articles');

    Route::middleware(['auth', AdminMiddleware::class])->group(function () {

        Route::get('/create', 'createForm')->name('article.create');
        Route::post('/create', 'store')->name('article.store');

        Route::get('articles/articles/{article:id}/delete', 'delete')->name('admin.delete')->where('id', '[0-9]*');

        Route::get('articles/{article:id}/update', 'updateForm')
            ->name('updateForm')->where('id', '[0-9]*');

        Route::post('articles/{article:id}/update', 'update')
            ->name('article.update')->where('id', '[0-9]*');
    });

    Route::get('/articles/{article:slug}', 'show')->name('postDetails');
});

Route::controller(CommentController::class)->middleware('auth')->as('comment')->group(function () {
    Route::post('/articles/comment', 'store')->name('store');
});

Route::middleware(['auth', AdminMiddleware::class])->controller(AdminController::class)->prefix('/admin')->as('admin')->group(function () {
    Route::get('/', 'index')->name('index');
});
