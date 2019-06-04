<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\teamdetail;
use App\team;


class groupSelectController extends Controller
{
    //

    public function randomGroup()
    {

        $userCount = $user->count();
        dd($userCount);

    }


}
