<?php

use App\Livewire\Layout\Admin\Index;
use App\Livewire\SchoolMaster\Index as SchoolMasterIndex;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('dashboard', Index::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('admin/school', SchoolMasterIndex::class)->middleware(['auth', 'verified'])->name('school.index');




Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
