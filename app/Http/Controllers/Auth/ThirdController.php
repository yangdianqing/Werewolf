<?php

namespace App\Http\Controllers\Auth;

use App\Library\App\Config;
use App\Model\UserThirdLogin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class ThirdController extends Controller
{


    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        $where =  [
            'app_type' => 'github',
            'app_user_id' => $user->getId(),

        ];
        $thirdUser = UserThirdLogin::where($where)->first();
        if($thirdUser){
            $thirdUser->access_token = $user->token;
            $thirdUser->save();
            \Auth::loginUsingId($thirdUser->user_id ,true);

        }else{
            $creatingUser = User::create([
                'account' =>'',
                'nickname' => $user->nickname,
                'account_type' => Config::ACCOUNT_TYPE,
                'password' => '',
                'email' => $user->email,
                'portrait' =>$user->avatar,
                'remember_token' =>$user->token,
            ]);
            UserThirdLogin::create([
                'user_id' => $creatingUser->id,
                'app_type' => 'github',
                'app_user_id' => $user->getId(),
                'access_token' => $user->token,
            ]);
            \Auth::login($creatingUser);
        }
        return redirect(Route('home'));

    }
}
