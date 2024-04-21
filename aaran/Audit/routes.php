<?php

use Illuminate\Support\Facades\Route;

//Audit
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('clients', App\Livewire\Audit\Client\Index::class)->name('clients');
    Route::get('clients/{id}/show', App\Livewire\Audit\Client\Show::class)->name('clients.show');

//    Route::get('clientFee', \App\Livewire\Audit\old\Fee::class)->name('clientFee');
//
//    Route::get('clientBank', \App\Livewire\Audit\old\Bank::class)->name('clientBank');
//    Route::get('banks/{id}/details', \App\Livewire\Audit\old\BankDetails::class)->name('banks.details');
//
//    Route::get('clientGstFilings', \App\Livewire\Audit\old\Filling::class)->name('clientGstFilings');
//
//    Route::get('clientBankBalance', \App\Livewire\Audit\old\Balance::class)->name('clientBankBalance');
//    Route::get('clientGstCredits', App\Livewire\Audit\Gstcredit\Index::class)->name('clientGstCredits');




});
