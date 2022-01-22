<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function create()
  {
    return view('login.index');
  }

  public function authenticate(Request $request)
  {
    
    $request->validate([
      'username' => 'required',
      'password' => 'required',
    ]);

    $field = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

    $credentials = [
      $field => $request->username, 
      'password' => $request->password,
    ];

    if (Auth::attempt($credentials, $request->remember)) {
      $request->session()->regenerate();
      return redirect()->intended('home');
    }

    return back()->with('failed', 'Login failed, please try again');
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
  }

}
