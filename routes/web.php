<?php

use App\Http\Controllers\ForumMessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('/forum')->name('forum.')->group(function () { 
    Route::get('/', [ForumMessageController::class,'show'])->name('show');
    Route::post('/', [ForumMessageController::class, 'store'])->name('store');
});