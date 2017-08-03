<?php

namespace App\Http\Controllers;

use App\Library\App\Config;
use App\Model\Behaviour;
use App\User;


class TestController extends Controller
{
    //
    public function  a(){
        $user =Behaviour::create([
            'title' => 'abc',
            'description' =>'lalalala',
        ]);
        $user->delete();
        dd($user);
    }
}
