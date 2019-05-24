<?php

namespace App\Imports;
use App\Role;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;



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

        $user->role = Role::create([
            'role_id' => '2',
            'user_id' => $user->id,

        ]);

        return $user;


    }

    public function headingRow(): int
    {
        return 2;
    }
}

