<?php

namespace App\Http\Middleware;
use Closure;


use Illuminate\Auth\Middleware\Authenticate as Middleware;
//
//class Authenticate extends Middleware
//{
////    /**
////     * Get the path the user should be redirected to when they are not authenticated.
////     *
////     * @param  \Illuminate\Http\Request  $request
////     * @return string|null
////     */
//////    /** @var TYPE_NAME $next */
//
//    public function handle($request, Closure $next, ...$guards)
//    {
//        if ($this->authenticate($request, $guards) === 'authentication_error') {
//            return response()->json(['error'=>'Unauthorized']);
//        }
//        /** @var TYPE_NAME $next */
//        return $next($request);
//    }
//    protected function authenticate($request, array $guards)
//    {
//        if (empty($guards)) {
//            $guards = [null];
//        }
//        foreach ($guards as $guard) {
//            if ($this->auth->guard($guard)->check()) {
//                return $this->auth->shouldUse($guard);
//            }
//        }
//        return 'authentication_error';
//    }
//
//    //u Kan
//    protected function redirectTo($request)
//    {
//        if (! $request->expectsJson()) {
//            return route('login');
//        }
//    }
//}

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        if ($this->authenticate($request, $guards) === 'authentication_error') {
            return response()->json(['error'=>'Unauthorized']);
        }
        return $next($request);
    }
    protected function authenticate($request, array $guards)
    {
        if (empty($guards)) {
            $guards = [null];
        }
        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                return $this->auth->shouldUse($guard);
            }
        }
        return 'authentication_error';
    }
}
