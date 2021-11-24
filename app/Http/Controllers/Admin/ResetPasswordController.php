<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    
     public function showLinkRequestForm()
     {
     return view('admin.passwords.email');
     }
      public function sendResetLinkEmail(Request $request)
      {
      $this->validateEmail($request);

      // We will send the password reset link to this user. Once we have attempted
      // to send the link, we will examine the response then see the message we
      // need to show to the user. Finally, we'll send out a proper response.
      $response = $this->broker()->sendResetLink(
      $this->credentials($request)
      );

      return $response == Password::RESET_LINK_SENT
      ? $this->sendResetLinkResponse($request, $response)
      : $this->sendResetLinkFailedResponse($request, $response);
      }
    
}