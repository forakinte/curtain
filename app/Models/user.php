<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'user';

    protected $fillable = [
        'user'
    ];

    protected $hidden = [
        'password', 'character_id', 'remember_token'
    ];
}
