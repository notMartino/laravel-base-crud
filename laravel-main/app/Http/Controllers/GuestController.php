<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guest;

class GuestController extends Controller
{
    public function indexView(){
        $guests = Guest::all();

        return view('pages.index', compact('guests'));
    }

    public function guestView($id){
        $guest = Guest::findOrFail($id);

        return view('pages.guest', compact('guest'));
    }

}
