<?php

use Illuminate\Support\Facades\Route;

//master
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/outstandings', App\Livewire\Master\Company\Index::class)->name('outstandings');

    Route::get('/sales-reports', App\Livewire\Master\Company\Index::class)->name('sales-reports');

    Route::get('/purchase-reports', App\Livewire\Master\Company\Index::class)->name('purchase-reports');

    Route::get('/gst-reports', App\Livewire\Master\Company\Index::class)->name('gst-reports');

});
