<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopkeeperController;
use App\Http\Controllers\RetailerController;
use Illuminate\Support\Facades\Hash;


Route::get('/', function () {
    return view('launcher');
})->name('launcher.view');
Route::post('/', function () {
    return view('launcher');
})->name('launcher.view');

Route::get('/register/view', [ShopkeeperController::class, 'index'])->name('register.shop.view');
Route::get('/records/view', [ShopkeeperController::class, 'records_view'])->name('add.records.view');
Route::get('/records/list', [ShopkeeperController::class, 'index'])->name('view.records');
Route::post('/register/view', [ShopkeeperController::class, 'index'])->name('register.shop.view');
Route::post('/records/view', [ShopkeeperController::class, 'records_view'])->name('add.records.view');
Route::post('/records/list', [ShopkeeperController::class, 'index'])->name('view.records');
Route::post('/register', [ShopkeeperController::class, 'store'])->name('register.shop');

Route::post('/add/records', [RetailerController::class, 'store'])->name('add.records');
Route::get('/add/records', [RetailerController::class, 'store'])->name('add.records');
Route::get('/add/records', [RetailerController::class, 'store'])->name('add.records');
