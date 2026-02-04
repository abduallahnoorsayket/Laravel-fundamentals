<?php

/**
 * @file
 */

use App\Models\Idea;
use App\Models\User;

it('Shows all ideas', function () {
    // Given i am signed in.
    $this->actingAs($user = User::factory()->create());
    // And i have one idea in DB.
    $user->ideas()->create([
      'description' => 'Build a thing',
    ]);
    // When i visit /ideas.
    visit('/ideas')
      ->assertSee('Build a thing');

    // I should see my one idea.
});

it('Shows a single ideas', function () {
    $idea = Idea::factory()->create(['description' => 'Unique idea']);

    visit("/ideas/{$idea->id}")
      ->assertSee('Unique idea');
});

it('Shows an edit form of  ideas', function () {
});
