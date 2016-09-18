<?php

namespace App\Policies;

use Verlanglijstjes\User;
use Verlanglijstjes\Wish;
use Illuminate\Auth\Access\HandlesAuthorization;

class WishPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the wish.
     *
     * @param  User  $user
     * @param  Wish  $wish
     * @return bool
     */
    public function update(User $user, Wish $wish)
    {
        return $wish->user_id == $user->id;
    }

    /**
     * Determine whether the user can delete the wish.
     *
     * @param  User  $user
     * @param  Wish  $wish
     * @return bool
     */
    public function delete(User $user, Wish $wish)
    {
        return $wish->user_id == $user->id;
    }

    /**
     * Determine whether the user can claim a wish.
     *
     * @param  User  $user
     * @param  Wish  $wish
     * @return bool
     */
    public function claim(User $user, Wish $wish)
    {
        return $wish->isUnClaimed() && $wish->user_id != $user->id;
    }

    /**
     * Determine whether the user can unclaim a wish.
     *
     * @param  User  $user
     * @param  Wish  $wish
     * @return bool
     */
    public function unclaim(User $user, Wish $wish)
    {
        return $wish->isClaimed() && $wish->claimed_by == $user->id;
    }
}
