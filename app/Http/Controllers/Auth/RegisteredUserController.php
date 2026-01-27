<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

/**
 *
 */
class RegisteredUserController extends Controller {

  /**
   *
   */
  public function create() {
    return view('auth.register');
  }

  /**
   *
   */
  public function store(Request $request) {
    // dd(request()->all());
    // Validate the request.
    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'max:255', Password::default()],
    ]);

    // Create the user in DB.
    $user = User::create([
      'name'  => $request->name,
      'email'  => $request->email,
      'password'  => Hash::make($request->password),
    ]);

    // Log themin.
    Auth::login($user);

    // Re direct to home.
    return redirect('/ideas');
  }

}
