<?php

namespace App\Http\Controllers\Student;

use App\Student;
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

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest:student')->except('logout');
    }
 
    
    public function showLoginForm()
    {
    return view('student.login');
    }
    
    public function studentlogin(Request $request)
    {
        $request->validate([
        'email'=>'required|string',
        'password' => 'required|string',
        ]);
        
        if(Auth::guard('student')->attempt(['email'=>$request->email,'password'=>$request->password]
        ,$request->remember)){
            return redirect(route('student.home'));
        }else{
            return redirect()->back()->with("message","Incorrect email/password");
        }
    }

    public function logout(Request $request)
    {
        if(Auth::guard('student')->check()){
            Auth::guard('student')->logout();
            return view('welcome');
        }
    

    }
    
}