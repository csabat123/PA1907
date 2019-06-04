<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\userShowModel;

use Illuminate\Support\Facades\DB;

class usershowController extends Controller
{
    //
    public function index()
    {
        $users = DB::table('users')
        ->join('role_user','users.id', '=',  'role_user.user_id')
        ->select('users.*')
        ->where('role_user.role_id','=','2')
        ->get();



        return view('adminfrontend.team')->with(compact('users'));

    }

    public function create()
    {
        return view('adminfrontend.create');
    }



}
