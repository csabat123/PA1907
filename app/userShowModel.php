<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userShowModel extends Model
{
     protected $table = 'users';
     protected $primary = 'id';
     protected $fillable = [
        'firstName', 'lastName', 'email', 'password' ];



}
