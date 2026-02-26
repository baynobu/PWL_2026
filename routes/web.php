<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

Route::get('/ hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/user/{name}', function ($name) {
    return 'Abdul Rahman Hanif Darmawan ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});
Route::get('/user/{name?}', function ($name = null) {
    return 'Abdul Rahman Hanif Darmawan ' . $name;
});
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Abdul Rahman Hanif Darmawan ' . $name;
});
