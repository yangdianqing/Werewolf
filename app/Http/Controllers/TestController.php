<?php

namespace App\Http\Controllers;

use App\Library\App\Config;
use App\User;


class TestController extends Controller
{
    //
    public function  a(){
        $user = User::create([
            'account' => 3,
            'nickname' =>3,
            'account_type' => Config::ACCOUNT_TYPE,
            'password' => bcrypt(123456),
        ]);
        dd($user);
    }
}
