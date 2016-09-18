<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWishRequest;
use App\Http\Requests\UpdateWishRequest;
use Verlanglijstjes\Wish;

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
        ]);
    }

    public function addWish()
    {
        return view('wish-form')->with([
            'target' => '/wish/create',
            'buttonText' => 'Toevoegen',
        ]);
    }

    public function editWish(Wish $wish)
    {
        return view('wish-form')->with([
            'target' => '/wish/update/' . $wish->id,
            'wish' => $wish,
            'buttonText' => 'Aanpassen',
        ]);
    }

    public function updateWish(UpdateWishRequest $request, Wish $wish)
    {
        $wish->description = $request->input('wish');
        $wish->link = $request->input('link');

        $wish->save();

        return redirect('/list/' . $request->user()->name);
    }

    public function createWish(CreateWishRequest $request)
    {
        $wish = new Wish();
        $wish->user_id = $request->user()->id;
        $wish->description = $request->input('wish');
        $wish->link = $request->input('link');

        $wish->save();

        return redirect('/list/' . $request->user()->name);
    }
}
