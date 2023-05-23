<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//top-menu-bar item url
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/single-post', [App\Http\Controllers\HomeController::class, 'singlepost'])->name('single-post');
//contruct form
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');

Route::post('/sendEmail', [App\Http\Controllers\ContactController::class, 'SubmitContructform'])->name('sendEmail');

// download cv
Route::get('/downloadCv', [App\Http\Controllers\HomeController::class, 'download'])->name('downloadCv');
 
 //admin dashboard controller route
Route::group(['prefix'=>'admin', 'middleware'=>'auth' ], function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\dashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('slider', SliderController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('item', ItemController::class);

    
});
