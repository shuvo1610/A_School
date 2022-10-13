<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function create()
    {
        return view('student.create');
    }

}
