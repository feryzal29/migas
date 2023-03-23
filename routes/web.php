<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostingController;

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
    Route::get('admin','index');
});

Route::controller(CategoriesController::class)->group(function (){
    Route::get('admin/categories','index')->name('categories.index');
    Route::post('admin/categories','store')->name('categories.store');
    Route::get('admin/categories/{id}','show')->name('categories.show');
    Route::put('admin/categories/{categories}','update')->name('categories.update');
    Route::get('admin/categories/{id}/delete','destroy')->name('categories.delete');
});

Route::controller(PostingController::class)->group(function (){
    Route::get('admin/posting','index')->name('posting.index');
    Route::get('admin/postingList','postingList')->name('posting.list');
    Route::get('admin/{id}/postingan','show')->name('posting.show');
    Route::post('admin/posting','store')->name('posting.post');
    Route::put('admin/posting/{posting}/update','update')->name('posting.update');
    Route::get('admin/posting/{id}/delete','destroy')->name('posting.delete');
});