<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) 
    {
        $articals = Article::query()
            ->where('is_published', '=', true);
            
            if ($request->get('q')) {
                $query = strtolower(trim($request->get('q')));

                $articals = $articals->where('title', 'LIKE', "%$query%");
            }

        $articals = $articals->orderByDesc('created_at')
            ->limit(3)
            ->get();


        return view('home', compact('articals'));
    }

    public function contact() 
    {
        return view("contact");
    }

    public function blog() 
    {
        return view("blog");
    }

    public function about() 
    {
        return view("about");
    }

    public function postDetails() 
    {
        return view("post-details");
    }

    public function login() 
    {
        return view('login');
    }

    public function registration() 
    {
        return view('registration');
    }
}
