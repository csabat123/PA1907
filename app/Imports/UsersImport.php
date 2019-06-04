<?php

namespace App\Imports;
use App\role_team;
use App\User;
use App\team;
use App\teamdetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Illuminate\Http\Request;



class UsersImport implements ToModel
{



    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */



    public function model(array $row)

    {






        $user =User::create([
            'firstName'  => $row[0],
            'lastName' => $row[1],
            'email'    => $row[2].'@student.westernsydney.edu.au',
        ]);

        $role_team = role_team::create([
            'role_id' => '2',
            'user_id' => $user->id,

        ]);








        return $user;
    }

    public function selectTeam(User $user)
    {

        $userCount = $user
        ->count();


        dd($userCount);



        $team = team::create([

            ]);

            $teamdetail = teamdetail::create([
                'user_id' => $user_id
            ]);
    }


}

