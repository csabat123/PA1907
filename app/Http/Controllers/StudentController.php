<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    //Index method for SuperAdmin Controller
    public function index()
    {
        return view('adminfrontend.adminstory');
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_STUDENT');
    }
}
