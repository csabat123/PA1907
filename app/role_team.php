<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role_team extends Model
{
    //
    protected $table = 'role_user';

    protected $fillable = [
        'role_id', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\userShowModel');
    }
}
