<?php

namespace App\Http\Controllers;

use Verlanglijstjes\User;

class ApiController extends Controller
{
    public function members()
    {
        return User::orderBy('order')->get(['id', 'name', 'rank', 'order']);
    }

    public function wishList($name)
    {
        $user = User::where('name', $name)->firstOrFail();

        return $user->wishListItems()
            ->orderBy('created_at')
            ->get(['id', 'user_id', 'description', 'link', 'claimed_by', 'updated_at']);
    }
}
