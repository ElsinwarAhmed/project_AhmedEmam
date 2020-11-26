<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // login with email
    // public function username()
    // {
    //     return 'email';
    // }


    // validation with mobile
    // override on validation of email
    // login with mobile
    // public function username()
    // {
    //     return 'mobile';
    // }


    // login with email or mobile
    public function username()
    {
        $inputVal = request()->input('identify');
        $field = filter_var($inputVal, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
        request()->merge([$field => $inputVal]);
        return $field;
    }
}
