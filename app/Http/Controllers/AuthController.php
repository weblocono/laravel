<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registration(RegistrationRequest $request) 
    {
        $data = $request->validated();

        $data['password'] = Hash::make($request['password']);

        $user = User::query()->create($data);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function login(LoginRequest $request) 
    {
        if (!Auth::attempt($request->validated())) {
            return back()
            ->withErrors(['invalid' => 'no correct email or password']);
        }

        if (Auth::user()->role === 'banned') {
            Auth::logout();

            return back()
            ->withErrors($request->errors(['banned' => 'You are has been blocked! :3']));
        }

        return redirect()->route('home');
    }

    public function logout() 
    {
        Auth::logout();
    
        return redirect()->route('home');
    }
}
