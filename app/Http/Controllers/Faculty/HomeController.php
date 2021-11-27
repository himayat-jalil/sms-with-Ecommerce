<?php

namespace App\Http\Controllers\Faculty;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth:faculty');
    }

    public function index()
    {
        return view('faculty.faculty-home');
        
    }
}