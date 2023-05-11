<?php

use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signUp', [Controller\Site::class, 'signUp']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add(['GET', 'POST'], '/profile', [Controller\Site::class, 'profile'])->middleware('auth');
Route::add('GET', '/logout', [Controller\Site::class, 'logout'])->middleware('auth');



