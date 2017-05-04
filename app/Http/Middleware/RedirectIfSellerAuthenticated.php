<?php

namespace App\Http\Middleware;

use Closure;
//Auth Facade
use Auth;

class RedirectIfSellerAuthenticated {

    public function handle($request, Closure $next) {
        if (Auth::guard()->check()) {
            return redirect('/home');
        }

        if (Auth::guard('web_seller')->check()) {
            return redirect('/employer_home');
        }

        //If request comes from logged in seller, he will
        //be redirected to seller's home page.
        if (Auth::guard('web_admin')->check()) {
            return redirect('/admin_home');
        }
        return $next($request);
    }

}
