<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tag;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('welcome', [
        'tags' => Tag::get(),
    ]);
});

Route::post('tags', [TagController::class, 'store']);
Route::delete('tags/{tag}', [TagController::class, 'destroy']);
