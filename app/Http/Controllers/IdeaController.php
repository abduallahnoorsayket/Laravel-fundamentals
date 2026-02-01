<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequest;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Gate;

/**
 *
 */
class IdeaController extends Controller {

  /**
   * Display a listing of the resource.
   */
  public function index(Request $request) {
    // $ideas = Idea::all();
    // $ideas = Idea::query()->where([
    //   'user_id' => FacadesAuth::id(),
    // ])->get();
    // $ideas = Idea::query()->where('user_id', $request->user()->id())->get();
    $ideas = FacadesAuth::user()->ideas;
    return view('ideas.index', [
      'ideas' => $ideas,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create() {
    // Gate::authorize('create', Idea::class);.
    return view('ideas.create', []);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(IdeaRequest $request) {
    // $request->validate(
    //     ['description' => ['required', 'min:10']]);
    FacadesAuth::user()->ideas()->create([
    // 'description' => request('description'),
      'description' => $request['description'],
      'state' => 'pending',
    // 'user_id' => FacadesAuth::id(),
    ]);

    return redirect('/ideas');
  }

  /**
   * Display the specified resource.
   */
  public function show(Idea $idea) {
    Gate::authorize('update', $idea);
    return view('ideas.show', [
      'idea' => $idea,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Idea $idea) {
    Gate::authorize('update', $idea);
    return view('ideas.edit', [
      'idea' => $idea,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(IdeaRequest $request, Idea $idea) {
    Gate::authorize('update', $idea);
    $idea->update([
      'description' => request('description'),
    ]);

    return redirect("/ideas/{$idea->id}");
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Idea $idea) {
    Gate::authorize('update', $idea);
    $idea->delete();
    return redirect('/ideas');
  }

}
