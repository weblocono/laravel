<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() 
    {
        $users = [
        [
            "id" => 1,
            "username" => "Molotok"
        ],
        [
            "id" => 2,
            "username" => "Molotok2"
        ],
        [
            "id" => 3,
            "username" => "Molotok3"
        ],
        ];
        return view('index', compact('users'));
    }
}
