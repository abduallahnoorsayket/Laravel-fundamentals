<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

/**
 *
 */
class SessionsController extends Controller {

  /**
   * Show the form for creating a new resource.
   */
  public function create() {
    return view('auth.login', []);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request) {
    // Validate.
    // dd($request->all());
    $validated = $request->validate([
      'email' => ['required', 'string', 'email', 'max:255'],
      'password' => ['required', 'string', Password::default()],
    ]);
    // Attempt to login.
    if (Auth::attempt($validated)) {
      $request->session()->regenerate();
      return redirect()->intended('/ideas');
    }
    // redirect.
    return back()->withErrors([
      'email' => 'Provided credentials not match',
    ])->onlyInput('email');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/ideas');
  }

}
