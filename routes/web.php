<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ClientWebController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MyteamController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\VisiMisiMotoController;

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

// Route::get('/', function () {
//     return view('index');
// });

//client
Route::controller(ClientWebController::class)->group(function (){
    Route::get('/','index')->name('index');
    Route::get('profile','about')->name('about');
    Route::get('posting','posting')->name('posting');
    Route::get('posting/{id}/details','detail_posting')->name('postdetail');
    Route::get('gallery-video','gallery_video')->name('gallery-video');
    Route::get('gallery-photos','gallery_photos')->name('gallery-photos');
    Route::get('contact','contact')->name('contact');
    Route::get('download','download')->name('download');
    Route::get('download/{id}/downloadFile','downloadFile')->name('download.file');
});

Route::controller(MessageController::class)->group(function (){
    Route::post('message-post','store')->name('message.post');
});

//end client

//admin dashboard

Route::controller(LoginController::class)->group(function (){
    Route::get('login','index')->name('login');
    Route::post('login','store')->name('login.store');
    Route::get('logout','logout')->name('logout');
});

Route::controller(AdminDashboardController::class)->group(function (){
    Route::get('admin','index')->name('dashboard')->middleware('role:user|admin');
});

Route::controller(CategoriesController::class)->group(function (){
    Route::get('admin/categories','index')->name('categories.index')->middleware('role:admin');
    Route::post('admin/categories','store')->name('categories.store')->middleware('role:admin');
    Route::get('admin/categories/{id}','show')->name('categories.show')->middleware('role:admin');
    Route::put('admin/categories/{categories}','update')->name('categories.update')->middleware('role:admin');
    Route::get('admin/categories/{id}/delete','destroy')->name('categories.delete')->middleware('role:admin');
});

Route::controller(PostingController::class)->group(function (){
    Route::get('admin/posting','index')->name('posting.index')->middleware('role:admin');
    Route::get('admin/postingList','postingList')->name('posting.list')->middleware('role:admin');
    Route::get('admin/{id}/postingan','show')->name('posting.show')->middleware('role:admin');
    Route::post('admin/posting','store')->name('posting.post')->middleware('role:admin');
    Route::put('admin/posting/{posting}/update','update')->name('posting.update')->middleware('role:admin');
    Route::get('admin/posting/{id}/delete','destroy')->name('posting.delete')->middleware('role:admin');
});

Route::controller(ProfileController::class)->group(function (){
    Route::get('admin/profile/view','index')->name('profile.view')->middleware('role:admin');
    Route::get('admin/{id}/profile','show')->name('profile.priview')->middleware('role:admin');
    Route::get('admin/profile','create')->name('profile.create')->middleware('role:admin');
    Route::post('admin/profile','store')->name('profile.post')->middleware('role:admin');
    Route::put('admin/profile/{profile}/update','update')->name('profile.update')->middleware('role:admin');
});

Route::controller(VisimisiController::class)->group(function (){
    Route::get('admin/visimisi','index')->name('visimisi.view')->middleware('role:admin');
    Route::get('admin/{id}/visimisi','show')->name('visimisi.show')->middleware('role:admin');
    Route::post('admin/visimisi/post','store')->name('visimisi.post')->middleware('role:admin');
});

Route::controller(MyteamController::class)->group(function (){
    Route::get('admin/myteams','index')->name('myteams.index')->middleware('role:admin');
    Route::get('admin/myTeams/create','create')->name('myteams.create')->middleware('role:admin');
    Route::post('admin/myteams/post','store')->name('myteams.post')->middleware('role:admin');
    Route::get('admin/myteams/{id}/show','show')->name('myteams.show')->middleware('role:admin');
    Route::put('admin/myteams/{myteam}/update','update')->name('myteams.update')->middleware('role:admin');
    Route::get('admin/myteams/{id}/delete','destroy')->name('myteams.delete')->middleware('role:admin');
});

Route::controller(VideoController::class)->group(function (){
    Route::get('admin/gallery-video','index')->name('gallery-video.index')->middleware('role:admin');
    Route::get('admin/gallery-video/create','create')->name('gallery-video.create')->middleware('role:admin');
    Route::post('admin/gallery-video/post','store')->name('gallery-video.post')->middleware('role:admin');
});

Route::controller(PhotoController::class)->group(function (){
    Route::get('admin/gallery-photos','index')->name('gallery-photos.index')->middleware('role:admin');
    Route::get('admin/gallery-photos/create','create')->name('gallery-photos.create')->middleware('role:admin');
    Route::post('admin/gallery-photos/post','store')->name('gallery-photos.store')->middleware('role:admin');
});

Route::controller(FaqController::class)->group(function (){
    Route::get('admin/faq','index')->name('faq-list.index')->middleware('role:admin');
    Route::get('admin/faq-create','create')->name('faq-create.create')->middleware('role:admin');
    Route::get('admin/{faq}/faq','show')->name('faq-view.view')->middleware('role:admin');
    Route::post('admin/faq-post','store')->name('faq-post.post')->middleware('role:admin');
    Route::put('admin/{faq}/faq-update','update')->name('faq-update.update')->middleware('role:admin');
    Route::get('admin/{faq}/faq-delete','destroy')->name('faq-delete.delete')->middleware('role:admin');
});

Route::controller(ContactController::class)->group(function (){
    Route::get('admin/contact','index')->name('contact.index')->middleware('role:admin');
    Route::put('admin/{contact}/contact','update')->name('contact.update')->middleware('role:admin');
});

Route::controller(HeaderController::class)->group(function (){
    Route::get('admin/header','index')->name('header.index')->middleware('role:admin');
    Route::put('admin/{header}/header','update')->name('header.update')->middleware('role:admin');
});

Route::controller(DocumentController::class)->group(function (){
   Route::get('admin/dokumen','index')->name('dokumen.index')->middleware('role:admin');
   Route::get('admin/dokumen-create','create')->name('dokumen.create')->middleware('role:admin');
   Route::post('admin/dokumen-post','store')->name('dokumen.post')->middleware('role:admin');
   Route::get('admin/{id}/dokumen','downloadFile')->name('dokumen.download')->middleware('role:admin');
   Route::get('admin/{document}/dokumen-delete','destroy')->name('dokumen.destroy')->middleware('role:admin');
});

//end admin dashboard