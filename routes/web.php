<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);



Route::group([
    'middleware'=> ['auth'],
    'prefix' => 'admin', //admin/tamu
    'as' => 'admin.'
], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index'); // guestbook.test/admin/

    //guestbook.test/admin/dashboard -> route('admin.dashboard')
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
});
