<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Verlanglijstjes\User;

class MemberController extends Controller
{
    public function members()
    {
        return User::orderBy('order')->get(['id', 'name', 'rank', 'order']);
    }
}
