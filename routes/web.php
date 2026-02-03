<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ci-cd-test', function () {
    return 'CI/CD is working!   45454575';
});
