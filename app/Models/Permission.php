<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permission';

    protected $hidden = [
        'character_id', 'menu_id', 'p_view', 'p_create', 'p_update', 'p_delete'
    ];
}
