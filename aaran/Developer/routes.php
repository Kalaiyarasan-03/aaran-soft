<?php

use Illuminate\Support\Facades\Route;

//Common
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

});

//Demo
Route::get('/demo-requests', App\Livewire\Webs\DemoRequest\Index::class)->name('demo-requests');
Route::get('/demo-requests/upsert', App\Livewire\Webs\DemoRequest\Upsert::class)->name('demo-requests.upsert');
Route::get('/software-details', \App\Livewire\Developer\Installation\SoftwareDetails::class)->name('software-details');
