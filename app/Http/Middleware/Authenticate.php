<?php

namespace App\Http\Middleware;


use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Auth\AuthenticationException;
use Log;
class Authenticate extends Middleware
{
   protected function redirectTo($request): ?string
   {
      Log::debug('hello...');
      throw new AuthenticationException(
        'Unauthenticated',
      );
   return null;
   }
}
