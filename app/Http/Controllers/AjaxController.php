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
}
