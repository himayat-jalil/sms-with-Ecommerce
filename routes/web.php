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
Route::post('logout', 'Admin\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Admin\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Admin\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Admin\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index')->name('home');

// Student routes
Route::get('login', 'Student\LoginController@showLoginForm')->name('student.login');
Route::post('login', 'Student\LoginController@login');
Route::post('logout', 'Student\LoginController@logout')->name('student.logout');

// Registration Routes...
Route::get('register', 'Student\RegisterController@showRegistrationForm')->name('student.register');
Route::post('register', 'Student\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Student\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Student\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Student\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Student\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index')->name('student.home');

// Faculty routes
Route::get('login', 'Faculty\LoginController@showLoginForm')->name('faculty.login');
Route::post('login', 'Faculty\LoginController@login');
Route::post('logout', 'Faculty\LoginController@logout')->name('faculty.logout');

// Registration Routes...
Route::get('register', 'Faculty\RegisterController@showRegistrationForm')->name('faculty.register');
Route::post('register', 'Faculty\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Faculty\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Faculty\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Faculty\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Faculty\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index')->name('faculty.home');