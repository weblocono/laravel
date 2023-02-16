<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registration(Request $request) 
    {
        $valodator = Validator::make($request->all(), [
            'username' => 'required|min:4|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'min:6', 'same:re_password'],
            'policy' => 'accepted',
        ]);


        if ($valodator->fails()) {
            return back()
            ->withErrors($valodator->errors())
            ->withInput($request->all());
        }

        $user = User::query()->create([
            'password' => Hash::make($request['password'])
        ] +$valodator->validated());

        Auth::login($user);

        return redirect()->route('home');
    }

    public function login(Request $request) 
    {
        $valodator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => ['required', 'min:6'],
        ]);

        if ($valodator->fails()) {
            return back()
            ->withErrors($valodator->errors())
            ->withInput($request->all());
        }

        if (!Auth::attempt($valodator->validated())) {
            return back()
            ->withErrors(['invalid' => 'no correct email or password'])
            ->withInput($request->all());
        }

        if (Auth::user()->role === 'banned') {
            Auth::logout();

            return back()
            ->withErrors($valodator->errors(['banned' => 'You are has been blocked! :3']))
            ->withInput($request->all());
        }

        return redirect()->route('home');
    }

    public function logout() 
    {
        Auth::logout();
    
        return redirect()->route('home');
    }
}
