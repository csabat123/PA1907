<?php

use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'firstName' => Str::random(5),
            'lastName' => Str::random(3).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
