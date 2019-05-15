<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('studentfrontend.studentindex');
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_SUPERADMIN');
    }


}
