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
        $this->middleware('guest:faculty')->except('logout');
    }
     public function showLoginForm()
     {
     return view('faculty.login');
     }

     public function login(Request $request)
     {
     $request->validate([
     'email' => 'required|string',
     'password' => 'required|string',
     ]);
     if(Auth::guard('faculty')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
     return redirect()->route('faculty-home');
     }else
     {
     dd("not matching");
     }
     }

     public function logout()
     {
     if(Auth::guard('faculty')->check()){
         Auth::guard('faculty')->logout();
         return view('welcome');
     }
     }



     protected function guard()
     {
     return Auth::guard('faculty');
     }
}