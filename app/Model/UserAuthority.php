<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserAuthority extends Model
{
    //
    protected $table = 'user_authority';
    protected $guarded = [];
    protected $casts = ['access' => 'array',
        'review' => 'array',
        'eatabish' => 'array',
        'remove' => 'array',
        'post' => 'array',
        'comment' => 'array',];
}
