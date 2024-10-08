<?php

use App\Http\Controllers\FormGuestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [FormGuestController::class, 'index'])->name('form.index');
Route::post('/', [FormGuestController::class, 'store'])->name('form.store');


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

    // Routing dari Institution
    Route::resource('/institution', App\Http\Controllers\InstitutionController::class);

    Route::resource('/guests', App\Http\Controllers\GuestController::class)
    ->only(['index', 'show', 'destroy']);

    Route::get('/reports', [App\Http\Controllers\ReportController::class,'index'])->name('reports.index');

});
