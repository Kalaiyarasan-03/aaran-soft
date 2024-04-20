<?php

use Illuminate\Support\Facades\Route;

//Audit
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('clients', App\Livewire\Audit\Client\Index::class)->name('clients');
    Route::get('clients/{id}/show', App\Livewire\Audit\Client\Show::class)->name('clients.show');

    Route::get('fees', App\Livewire\Audit\Client\Fee::class)->name('fees');

    Route::get('client_banks', App\Livewire\Audit\Client\Bank::class)->name('client_banks');
    Route::get('banks/{id}/details', App\Livewire\Audit\Client\BankDetails::class)->name('banks.details');

    Route::get('gstfillings', App\Livewire\Audit\Client\Filling::class)->name('gstfillings');

    Route::get('bankBalances', App\Livewire\Audit\Client\Balance::class)->name('bankBalances');

});
