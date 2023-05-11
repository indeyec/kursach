<?php

use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signUp', [Controller\Site::class, 'signUp'])->middleware('auth');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);



