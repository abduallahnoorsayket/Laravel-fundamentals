<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 *
 */
class AppServiceProvider extends ServiceProvider {

  /**
   * Register any application services.
   */
  public function register(): void {
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void {

    // FacadesGate::define('view-admin', function (?User $user) {
    //   // Return $user->isAdmin() ? Response::allow() : Response::denyAsNotFound();
    //   if ($user && $user->id === 1) {
    //     return Response::allow();
    //   }
    // // Return a 404 instead of 403.
    //   return Response::denyAsNotFound();
    // });
    // FacadesGate::define('view-admin', function (User $user) {
    //   // Return $user && $user->id === 1;.
    //   return FALSE;.
    // FacadesGate::define('view-admin', function (User $user) {
    //   if ($user->id == 1) {
    //     return Response::allow();
    //   }
    //   return Response::denyAsNotFound();
    // });
  }

}
