<?php

/**
 * @file
 */

// Use Illuminate\Support\Facades\DB;.
use App\Models\Idea;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ideas', function () {
    $ideas = Idea::all();
    // $ideas = Idea::query()
    //      ->when(request('state'), function ($query, $state) {
    //         $query->where('state', $state);
    //      })->get();
    // $ideas = Idea::where('state', 'complete')->get();
        // Return $idea;
    // $ideas = session()->get('ideas', []);
    // $ideas = DB::table('ideas')->get();
    // dd($ideas);
    return view('ideas.index', [
      'ideas' => $ideas,
    ]);
});

// Route model binding. list.
Route::get('/ideas/{idea}', function (Idea $idea) {
    // dd($idea);
    return view('ideas.show', [
      'idea' => $idea,
    ]);
});
// Edit.Single record.
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', [
      'idea' => $idea,
    ]);
});
// Update.
Route::patch('/ideas/{idea}', function (Idea $idea) {
   $idea->update([
     'description' => request('description'),
   ]);

   return redirect("/ideas/{$idea->id}");
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
// /stoere.
Route::post('/ideas', function () {
    // $idea = request('idea');
    Idea::create([
      'description' => request('description'),
      'state' => 'pending',
    ]);

  // If (!$description) {
  //     return back();
  //   }
    // session()->push('ideas', $idea);
        // DB::table('ideas')->insert([
        //   'description' => $description,
        // // 'state'->"haka",
        // // 'created_at'  => now(),
        // //   'updated_at'  => now(),
        // ]);
    return redirect('/ideas');
    // $idea = Request::input('idea');
    // dd(request()->all());
    // dd("Hello hi");.
});

// Route::view('/', 'welcome', ['greet' => 'hwllo ho bui', 'person' => request('person', 'world')]);.
// Route::view('/', 'welcome', [
//   'tasks' => [
//     'lorem jkjkjkjkj',
//   ],
// ]);.
// Route::view('/', 'ideas');.
Route::delete('/ideas/{idea}', function (Idea $idea) {
   $idea->delete();
   return redirect('/ideas');
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');
