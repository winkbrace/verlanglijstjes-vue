<?php

namespace App\Http\Controllers;

use Verlanglijstjes\Wish;

class AjaxController extends Controller
{
    public function toggleClaim(Wish $wish)
    {
        $wish->toggleClaim();

        return $wish;
    }

    public function deleteWish(Wish $wish)
    {
        if ($wish->isOwnedByCurrentUser()) {
            $wish->delete();
            return response('deleted');
        } else {
            $username = \Auth::user()->name;
            return response("User $username is not allowed to delete wish of " . $wish->user()->name, 403);
        }
    }
}
