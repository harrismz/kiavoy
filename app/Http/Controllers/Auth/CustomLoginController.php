<?php

// namespace App\Http\Controllers;

// // use TCG\Voyager\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class CustomLoginController extends Controller
// {
//     public function login(Request $request)
//     {
//         $credentials = $request->only('email', 'password');

//         if (Auth::guard('web')->attempt($credentials)) {
//             $request->session()->regenerate();
//             return redirect()->intended('admin');
//         }

//         return back()->withErrors([
//             'email' => 'The provided credentials do not match our records.',
//         ]);
//     }
// }
