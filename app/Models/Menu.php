<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $fillable = [
        'level', 'name'
    ];

    protected $hidden = [
        'parent_id', 'path'
    ];
}
