<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    //
    use SoftDeletes;
    protected $table = 'player';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    protected $casts = ['photo' => 'array',
        'other_name' => 'array',
    ];
}
