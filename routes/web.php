<?php

use App\Livewire\Machines\MachineForm;
use App\Livewire\Machines\MachineIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Machines\MachineShow;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {

    Route::get('/machines',
        MachineIndex::class
    )->middleware('permission:machine.view');

    Route::get('/machines/create',
        MachineForm::class
    )->middleware('permission:machine.create');

    Route::get('/machines/{machine}/edit',
        MachineForm::class
    )->middleware('permission:machine.edit');

    Route::get('/machines/{machine}',
        MachineShow::class
    )->middleware('permission:machine.view');

});


require __DIR__.'/auth.php';
