<?php

/**
 * @file
 */

use App\Models\User;
use Illuminate\Support\Facades\Auth;

it('Register a user', function () {
    // $page = visit('/');
    // $page->assertSee('Welcome')->debug();
    visit('/register')
      ->fill('name', 'John doe')
      ->fill('email', 'john@mail.com')
      ->fill('password', '123456789')
      ->press('@register-button')
      ->assertPathIs('/ideas');

    // Visit the reg page.
    // expect(User::count())->toBe(1);
    expect(User::where('email', 'john@mail.com')->exists())->toBe(TRUE);
    // Fill the form & submit.
    // $this->assertAuthenticated();
    Auth::user();
    // Create an account
    // shuld sing in
    // should be on the /ideas page.
});
