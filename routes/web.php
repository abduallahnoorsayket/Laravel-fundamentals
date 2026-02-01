<?php

/**
 * @file
 */

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;
// Use Illuminate\Support\Facades\DB;.
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'placeholder for home';
});

Route::middleware('auth')->group(function () {
  // Create.
  Route::get('/ideas/create', [IdeaController::class, 'create']);
  // /store.
  Route::post('/ideas', [IdeaController::class, 'store']);
  // List.
  Route::get('/ideas', [IdeaController::class, 'index'])->middleware('auth');
  // Route model binding. Details view.
  Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
  // Edit.Single record.
  //   Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->can('update', 'idea');.
  Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
  // Update.
  Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
  // Destroy.
  Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);
  // Logout.
  Route::delete('/logout', [SessionsController::class, 'destroy']);
});

Route::middleware('guest')->group(function () {
  // Register.
  Route::get('/register', [RegisteredUserController::class, 'create']);
  Route::post('/register', [RegisteredUserController::class, 'store']);
  // Login.
  Route::get('/login', [SessionsController::class, 'create'])->name('login');
  Route::post('/login', [SessionsController::class, 'store']);
});
// Two different ways to protect routes for authorisation 1.As middleware 2.Inside closure
// Route::get('/admin', function () {
//     Gate::authorize('view-admin');
//     return "Admin area";
// });.
Route::middleware('can:view-admin')->group(function () {
    Route::get('/admin', function () {
      return "prive page";
    });
});
// Route::get('/ideas/{id}', function ($id) {.
// // $idea = Idea::find($id);
//   $idea = Idea::findOrFail($id);
// // If (is_null($idea)) {
//   //     abort(404);
//   //   }.
//     return view('ideas.show', [
//       'idea' => $idea,
//     ]);
// });.
// Idea create route.
// Route::view('/', 'welcome', ['greet' => 'hwllo ho bui', 'person' => request('person', 'world')]);.
// Route::view('/', 'welcome', [
//   'tasks' => [
//     'lorem jkjkjkjkj',
//   ],
// ]);.
// Route::view('/', 'ideas');.
// Route::view('/about', 'about');
// Route::view('/contact', 'contact');.
