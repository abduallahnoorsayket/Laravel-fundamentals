<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 */
class Idea extends Model {

  /**
   * Bypas guard.
   *
   * @guard
   */
  protected $guarded = [];
  /**
   * Attitbutes.
   *
   * @attitbutes
   */
  protected $attributes = [
    'state' => 'pending',
  ];

  /**
   *
   */
  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }

}
