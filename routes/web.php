<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
// Admin routes
Route::get('login', 'Admin\LoginController@showLoginForm')->name('login');
Route::post('login', 'Admin\LoginController@login');
Route::get('logout', 'Admin\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Admin\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Admin\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm'); 
Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Admin\ResetPasswordController@reset')->name('password.update');
Route::get('/home', 'Admin\HomeController@index')->name('admin.home');

// Student routes
Route::get('student-login', 'Student\LoginController@showLoginForm')->name('student.login');
Route::post('student-login', 'Student\LoginController@studentlogin');
Route::get('student-logout', 'Student\LoginController@logout')->name('student.logout');

// Registration Routes...
Route::get('student-register', 'Student\RegisterController@showRegistrationForm')->name('.student.register');
Route::post('student-register', 'Student\RegisterController@register');

// Password Reset Routes...
Route::get('student-password/reset', 'Student\ForgotPasswordController@showLinkRequestForm');
Route::post('student-password/email', 'Student\ForgotPasswordController@sendResetLinkEmail');
Route::get('student-password/reset/{token}', 'Student\ResetPasswordController@showResetForm');
Route::post('student-password/reset', 'Student\ResetPasswordController@reset');
Route::get('student/home', 'Student\HomeController@index')->name('student.home');

// Faculty routes
Route::get('faculty-login', 'Faculty\LoginController@showLoginForm')->name('faculty.login');
Route::post('faculty-login', 'Faculty\LoginController@login')->name('faculty.login');
Route::get('faculty-logout', 'Faculty\LoginController@logout')->name('faculty.logout');

// Registration Routes...
Route::get('faculty-register', 'Faculty\RegisterController@showRegistrationForm')->name('faculty.register');
Route::post('faculty-register', 'Faculty\RegisterController@register');

// Password Reset Routes...
Route::get('faculty-password/reset', 'Faculty\ForgotPasswordController@showLinkRequestForm');
Route::post('faculty-password/email', 'Faculty\ForgotPasswordController@sendResetLinkEmail');
Route::get('faculty-password/reset/{token}', 'Faculty\ResetPasswordController@showResetForm');
Route::post('faculty-password/reset', 'Faculty\ResetPasswordController@reset');
Route::get('faculty/home', 'Faculty\HomeController@index')->name('faculty-home');