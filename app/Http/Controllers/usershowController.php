<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\userShowModel;
use App\User;
use Illuminate\Support\Facades\DB;

class usershowController extends Controller
{
    //
    public function index()
    {
        $query = DB::table('users')
        ->join('roles','users.id', '=', 'roles.id')
        ->select('users.*')
        ->where('roles.name','=','ROLE_ADMIN')
        ->get();

        return view('adminfrontend.team', compact('query'));
    }


}
