<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@indexView') -> name('indexLink');
Route::get('/guest/{id}', 'GuestController@guestView') -> name('guestLink');
Route::get('/create/guest', 'GuestController@guestCreateView') -> name('guestCreateLink');

Route::post('/store/guest', 'GuestController@storeGuest') -> name('storeGuestLink');