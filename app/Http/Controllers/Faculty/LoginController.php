<?php

namespace App\Http\Controllers\Faculty;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
     public function showLoginForm()
     {
     return view('faculty.login');
     }

     public function login(Request $request)
     {
     $request->validate([
     $this->username() => 'required|string',
     'password' => 'required|string',
     ]);
     }

     protected function attemptLogin(Request $request)
     {
     return $this->guard()->attempt(
     $this->credentials($request), $request->filled('remember')
     );
     }

     public function logout(Request $request)
     {
     $this->guard()->logout();

     }



     protected function guard()
     {
     return Auth::guard('admin');
     }
}