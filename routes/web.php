<?php

/**
 * @file
 */

// Use Illuminate\Support\Facades\DB;.
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

// Create.
Route::get('/ideas/create', [IdeaController::class, 'create']);
// /store.
Route::post('/ideas', [IdeaController::class, 'store']);
// List.
Route::get('/ideas', [IdeaController::class, 'index']);
// Route model binding. Details view.
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
// Edit.Single record.
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
// Update.
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
// Destroy.
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);



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
