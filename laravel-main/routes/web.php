<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@indexView') -> name('indexLink');

Route::get('/guest/{id}', 'GuestController@guestView') -> name('guestLink');