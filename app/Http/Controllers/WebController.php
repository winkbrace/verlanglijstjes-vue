<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function wishList($name)
    {
        return view('list')->with([
            'name' => $name,
            'isCurrentUserWishList' => ! empty($user = \Auth::user()) && $user->name == $name
        ]);
    }

    public function test()
    {
        return view('test');
    }
}
