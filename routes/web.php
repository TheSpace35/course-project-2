<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');



Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');

    Route::get('/client', function () {
        return view('client');
    })->name('client');
    
});

Route::get('/project', function () {
    return view('project');
})->name('project');

