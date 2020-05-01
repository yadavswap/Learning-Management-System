<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected function redirectTo(){
        if(auth()->user()->isAdmin == 1){
            return '/dash';
    }else if (auth()->user()->isAdmin == 2){
        return '/dash_parent';

    }

    return '/home';
}
//     if(auth::user()->isAdmin == 1){
//     protected $redirectTo = '/home';
// }
// if(auth()->user()->isAdmin == 1){
//     return $next($request);

// }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
