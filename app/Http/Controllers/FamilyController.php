<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FamilyController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the views that are available for
    | family members with login credentials
    |
    */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $members = User::all(['id', 'name', 'rank', 'order'])->sortBy('order');

        return view('home')->with(compact('members'));
    }
}
