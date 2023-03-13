<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::controller(AdminDashboardController::class)->group(function (){
    Route::get('admin/dashboard','index');
});

Route::controller(CategoriesController::class)->group(function (){
    Route::get('admin/categories','index')->name('categories.index');
    Route::post('admin/categories','store')->name('categories.store');
});