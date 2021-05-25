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

    public function guestCreateView(){

        return view('pages.guestCreate');
    }

    public function storeGuest(Request $request){
        $validatedData = $request -> validate([
            'firstname' => 'required|max:128',
            'lastname' => 'required|max:128',
            'address' => 'required',
            'postalcode' => 'required|max:64',
            'payment' => 'required|numeric|min:40|max:5000',
            'room' => 'required|numeric|min:100|max:400'
        ]);

        $guest = Guest::create($validatedData);
        return redirect() -> route('guestLink', $guest -> id);
    }
}
