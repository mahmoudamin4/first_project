<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome')->with('amin',23);
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/amin2/{id?}', function () {
    return 'amin';
})->name('m');

Route::get('/amin/{id?}', function () {
    return 'id';
})->name('w') ;

Route::get('zaid','frontend\amin@mahmoud');

Route::resource('news','frontend\amin');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') ->middleware('verified');


