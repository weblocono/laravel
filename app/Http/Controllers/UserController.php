<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        $user = User::all();

        dd($user);
    }

    public function show(User $user) 
    {
        dd($user);
    }
}
