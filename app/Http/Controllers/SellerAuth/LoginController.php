<?php

namespace App\Http\Controllers\SellerAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//Auth facade
use Auth;

class LoginController extends Controller {

    //Where to redirect seller after login.
    protected $redirectTo = '/employer_home';

    //Trait
    use AuthenticatesUsers;

    //Custom guard for seller
    protected function guard() {
        return Auth::guard('web_seller');
    }

    //Shows seller login form
    public function showLoginForm() {
        return view('seller.auth.login');
    }

    public function logout(Request $request) {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/employer_login');
    }

}
