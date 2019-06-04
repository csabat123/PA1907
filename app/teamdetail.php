<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teamdetail extends Model
{
    //

    protected $table = 'teamdetail';
    protected $primary = 'id';

    protected $fillable = [
        'user_id', 'group_id'
    ];
    public function data()
    {
        return $this->hasMany('App\User','id');
    }


}
