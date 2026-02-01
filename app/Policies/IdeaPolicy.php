<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;

/**
 *
 */
class IdeaPolicy {
  // /**
  //  * Determine whether the user can view any models.
  //  */
  // public function viewAny(User $user): bool
  // {
  //     return false;
  // }
  // /**
  //  * Determine whether the user can view the model.
  //  */
  // public function view(User $user, Idea $idea): bool
  // {
  //     return false;
  // }
  // /**
  //  * Determine whether the user can create models.
  //  */
  // public function create(User $user): bool
  // {
  //     return false;

  /**
   * }
   */
  // Public function create(User $user): bool {
  //     return $user->isAdmin();
  //     // Or return an Access Response for richer control:
  //     // return $user->id === $idea->user_id
  //     //     ? Response::allow()
  //     //     : Response::denyAsNotFound(); // return 404 instead of 403.
  //   }.

  /**
   * Determine whether the user can update the model.
   */
  public function update(User $user, Idea $idea): bool {
    return $user->id == $idea->user_id;
    // Or return an Access Response for richer control:
    // return $user->id === $idea->user_id
    //     ? Response::allow()
    //     : Response::denyAsNotFound(); // return 404 instead of 403.
  }

  /**
   * Determine whether the user can delete the model.
   */
  public function delete(User $user, Idea $idea): bool {
    return FALSE;
  }

  /**
   * Determine whether the user can restore the model.
   */
  public function restore(User $user, Idea $idea): bool {
    return FALSE;
  }

  /**
   * Determine whether the user can permanently delete the model.
   */
  public function forceDelete(User $user, Idea $idea): bool {
    return FALSE;
  }

}
