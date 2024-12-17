<?php

use App\Http\Controllers\DenemeController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('panel.layout.app');
});
