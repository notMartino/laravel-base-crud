<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@indexView') -> name('indexLink');