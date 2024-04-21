<?php

use Illuminate\Support\Facades\Route;

//Audit
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('clients', App\Livewire\Audit\Client\Index::class)->name('clients');
    Route::get('clients/{id}/show', App\Livewire\Audit\Client\Show::class)->name('clients.show');

    Route::get('gstFilings', App\Livewire\Audit\GstFiling\Index::class)->name('gstFilings');

//    Route::get('clientFee', \App\Livewire\Audit\old\Fee::class)->name('clientFee');
//
    Route::get('clientBanks', App\Livewire\Audit\ClientBank\Index::class)->name('clientBanks');
    Route::get('clientBanks/{id}/show', App\Livewire\Audit\ClientBank\show::class)->name('clientBanks.show');
//
//
//    Route::get('clientBankBalance', \App\Livewire\Audit\old\Balance::class)->name('clientBankBalance');
//    Route::get('clientGstCredits', App\Livewire\Audit\Gstcredit\Index::class)->name('clientGstCredits');




});
