<?php

/**
 * @file
 */

// Use Illuminate\Support\Facades\DB;.
use App\Models\Idea;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
       $ideas = Idea::query()
         ->when(request('state'), function ($query, $state) {
            $query->where('state', $state);
         })->get();
    // $ideas = Idea::where('state', 'complete')->get();
    // $ideas = Idea::all();
        // Return $idea;
    // $ideas = session()->get('ideas', []);
    // $ideas = DB::table('ideas')->get();
    // dd($ideas);
    return view('ideas', [
      'ideas' => $ideas,
    ]);
});
Route::post('/ideas', function () {
    $idea = request('idea');

    Idea::create([
      'description' => $idea,
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
    return redirect('/');
    // $idea = Request::input('idea');
    // dd(request()->all());
    // dd("Hello hi");.
});

// Route::view('/', 'welcome', ['greet' => 'hwllo ho bui', 'person' => request('person', 'world')]);.
// Route::view('/', 'welcome', [
//   'tasks' => [
//     'lorem jkjkjkjkj',
//     'lorem jkjkjkjkj',
//     'lorem jkjkjkjkj',
//     'lorem jkjkjkjkj',
//   ],
// ]);.
// Route::view('/', 'ideas');.
Route::get('/delete-idea', function () {
   session()->forget('ideas');
   return redirect('/');
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');
