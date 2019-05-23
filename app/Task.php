<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $primary = 'id';
    protected $fillable = [
        'title', 'description', 'type', 'studentinvolved'
    ];
}
