<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'character';

    protected $visible = [
        'name'
    ];

    protected $fillable = [
        'name'
    ];

}
