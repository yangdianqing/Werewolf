<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BehaviourSummary extends Model
{
    //
    use SoftDeletes;
    protected $table = 'behaviour_summary';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
}
