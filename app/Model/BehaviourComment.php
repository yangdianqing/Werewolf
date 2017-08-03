<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BehaviourComment extends Model
{
    //
    use SoftDeletes;
    protected $table = 'behaviour_comment';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
}
