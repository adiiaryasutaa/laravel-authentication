<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
	public function create()
	{
		return view('register.index');
	}

	public function store(Request $request)
	{
		$validated = $request->validate([
			'email' => 'required|email:dns|unique:users|max:255',
			'username' => 'required|unique:users|min:5|max:20',
			'password' => 'required|min:8|max:20',
			'confirm_password' => 'required|same:password',
		]);

		$validated['password'] = Hash::make($validated['password']);

		User::create($validated);

		return redirect('/login')->with('success', 'Registration success, please login');
	}
}
