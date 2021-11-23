<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index()
    {
        return view('student.student-home');
    }
}