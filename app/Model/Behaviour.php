<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Behaviour extends Model
{
    //
    use SoftDeletes;
    protected $table = 'behaviour';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
}
