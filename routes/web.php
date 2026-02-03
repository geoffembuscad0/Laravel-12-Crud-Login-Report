<?php

use App\Livewire\Machines\CreateMachine;
use App\Livewire\Machines\EditMachine;
use App\Livewire\Machines\MachineIndex;
use App\Livewire\Machines\ShowMachine;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');
Route::view('profile', 'profile')->middleware(['auth'])->name('profile');

Route::middleware(['auth'])->prefix('machines')->name('machines.')->group(function () {
    Route::get('/',  MachineIndex::class)->name('index');
    Route::get('/create', CreateMachine::class)->name('create');
    Route::get('/{machine}', ShowMachine::class)->name('show');
    Route::get('/{machine}/edit', EditMachine::class)->name('edit');
});


require __DIR__.'/auth.php';
