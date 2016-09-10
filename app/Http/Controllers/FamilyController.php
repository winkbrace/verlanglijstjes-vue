<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FamilyController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Family Controller
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
        return view('home');
    }
}
