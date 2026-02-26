<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});

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
