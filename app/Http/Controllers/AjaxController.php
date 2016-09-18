<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteWishRequest;
use Verlanglijstjes\Wish;

class AjaxController extends Controller
{
    public function toggleClaim(Wish $wish)
    {
        $wish->toggleClaim();

        return $wish;
    }

    public function deleteWish(DeleteWishRequest $request, Wish $wish)
    {
        $wish->delete();
    }
}
