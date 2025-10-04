<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::get('/machines', \App\Livewire\Machines\Index::class)->name('machines.index');
Route::get('/machines/create', \App\Livewire\Machines\Create::class)->name('machines.create');
Route::get('/machines/show/{machine}', \App\Livewire\Machines\Show::class)->name('machines.show');
Route::get('/machines/update/{machine}', \App\Livewire\Machines\Edit::class)->name('machines.edit');

require __DIR__.'/auth.php';
