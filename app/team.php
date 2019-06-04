<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{

    protected $table = 'team';
    protected $primary = 'id';

    protected $fillable = [
        'groupName','groupMember', 'group_id'
    ];


    public function User()
    {
        return $this->belongsTo('App\Users', 'foreign_key');
    }



}
