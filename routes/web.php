<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('video')->controller(VideoController::class)->group(function(){
    Route::view('/add',"Video.Insert");
    Route::get('/','index');
    Route::post('insert','create');
});
