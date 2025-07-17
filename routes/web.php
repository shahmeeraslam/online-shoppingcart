<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

Route::get('/' ,[AuthManager::class,'home'])->name('home');
Route::get('/' , [AuthManager::class,'viewHomecards'])->name('viewHomecards');
Route::post('viewHomecards', [AuthManager::class,'contactpost'])->name('contactpost');
Route::get('login' , [AuthManager::class,'login'])->name('login');
Route::get('logout', [AuthManager::class,'logout'])->name('logout');
Route::post('login', [AuthManager::class,'loginPost'])->name('loginpost');
Route::get('register' , [AuthManager::class,'register'])->name('register');

Route::post('register', [AuthManager::class,'registerPost'] )->name('registerPost');  
Route::post('', [AuthManager::class,'confirm_order'] )->name('confirm_order'); 

Route::middleware(['auth', 'rolecheck:admin'])->group(function () {
    Route::delete('/card/{id}', [AuthManager::class,'carddelete'])->name('delete');
    Route::get('adminpage' , [AuthManager::class,'adminpage'])->name('adminpage');
    Route::post('adminpage' , [AuthManager::class,'adminpost'])->name('adminpost');
    Route::post('welcome', [AuthManager::class,'cartpost'] )->name('cartpost'); 
    Route::get('/card/{id}/edit' , [AuthManager::class,'edit'])->name('edit');
    Route::put('/card/{id}/adminpage' , [AuthManager::class,'update'])->name('update');
});
Route::middleware(['auth', 'rolecheck:user'])->group(function () {
    Route::get('cart' , [AuthManager::class,'cartview'])->name('cart');
    Route::post('welcome', [AuthManager::class,'cartpost'] )->name('cartpost'); 
    Route::delete('/cart/{id}', [AuthManager::class,'cartdelete'])->name('deletecart');
    
});