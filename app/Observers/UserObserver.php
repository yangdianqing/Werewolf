<?php
/**
 * Created by PhpStorm.
 * User: 14445
 * Date: 2017/8/2
 * Time: 16:35
 */

namespace App\Observers;


use App\Model\UserAuthority;
use App\Model\UserScore;
use App\User;

class UserObserver
{
    /**
     * @param User $user
     */
    public function created(User $user)
    {
        //
        UserAuthority::create([
            'user_id' => $user->id,
            'access' => [],
            'review' => [],
            'eatabish' => [],
            'remove' => [],
            'post' => [],
            'comment' => [],
        ]);

        UserScore::create([
            'user_id' => $user->id,
        ]);
    }
}