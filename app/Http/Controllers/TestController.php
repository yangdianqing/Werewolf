<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class TestController extends Controller
{
    //
    public function  a(){
        dd(Auth::routes());

    }
}
