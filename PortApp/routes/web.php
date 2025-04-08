<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;

Route::get('/',[PortController::class,'index'])->name('index');
Route::post('/store',[PortController::class,'store'])->name('store');
Route::get('/read',[PortController::class,'read'])->name('read');
Route::get('/dashboard',[DashboardController::class,'display'])->name('service.dashboard');
Route::get('/display',[DashboardController::class,'display'])->name('display');
 Route::get('/addNew',[ServiceController::class,'addPort'])->name('service.addNew');
 Route::get('/addport',[ServiceController::class,'addport'])->name('addport');
 Route::post('/addservice',[ServiceController::class,'addService'])->name('addService');
 Route::get('/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
Route::put('/update/{id}',[ServiceController::class,'update'])->name('update');
Route::delete('/delete/{id}',[ServiceController::class,'delete'])->name('delete');
Route::get('/portsView',[PortController::class,'read'])->name('ports.portsView');
Route::delete('/deletePort/{id}',[PortController::class,'deletePort'])->name('deletePort');
Route::get('/viewAll',[ServiceController::class,'viewAllService'])->name('service.viewAll');
Route::get('/viewAllService',[ServiceController::class,'viewAllService'])->name('viewAllService');
Route::post('/ports/{port}/toggle',[PortController::class,'toggleStatus'])->name('toggleStatus');




