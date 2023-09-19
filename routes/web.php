<?php

use App\Http\Controllers\GuruC;
use App\Http\Controllers\PesertadidikR;
use App\Http\Controllers\UserC;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('pesertadidik/pdf', [PesertadidikR::class, 'pdf'])->middleware('auth');
Route::resource('pesertadidik', PesertadidikR::class)->middleware('auth');
Route::resource('guru', GuruC::class)->middleware('auth');
Route::get('/login',[UserC::class,'login'])->name('login');
Route::get('/register',[UserC::class,'register'])->name('register');
Route::get('/logout',[UserC::class,'logout'])->name('logout');
Route::post('/register',[UserC::class,'register_action'])->name('register.action');
Route::post('/login',[UserC::class,'login_action'])->name('login.action');