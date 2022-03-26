<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GraphController;
use App\Http\Controllers\Admin\RecordController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Contact\ContactController;
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


Auth::routes();

Route::middleware('auth')->group(function () {
    //Ui Panel
    Route::get('/', [PageController::class, 'index']);
    Route::get('/report', [PageController::class, 'report']);
    Route::get('/contact', [PageController::class, 'contact']);
    Route::get('/about', [PageController::class, 'about']);
    Route::get('/profile', [PageController::class, 'profile']);
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isadmin']], function () {
    //Admin Panel
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/user', [UserController::class, 'index']);
    //Route::get("/post", function(){
    //    return view("admin-panel.post");
    //});
    Route::resource('/post', 'Admin\PostController');
    //Route::get('/post', 'Admin\PostController@search')->name('search');
    Route::get('/graph', [GraphController::class, 'index']);
    Route::get('/record', [RecordController::class, 'index']);
    Route::get('/contact', [ContactUsController::class, 'index']);
    Route::get('/profile', [AdminProfileController::class, 'index']);
<<<<<<< HEAD

    Route::get('/contact', 'Contact\ContactController@contactList');
    Route::delete('/contact/{id}', 'Contact\ContactController@deleteContactById')->name('contact.delete');
    Route::get('/contact/search', 'Contact\ContactController@searchContact')->name('contact.search');
    Route::get('/user', 'User\UserController@userList');
    Route::post('/user', 'User\UserController@userList');
    Route::post('/user/{id}', 'User\UserController@updateUserRole')->name('user.change-role');
    Route::get('/search', 'User\UserController@searchUser')->name('user.search');

    Route::get('/profile', 'User\UserController@adminProfile');
});

Route::get('/contact-form', [ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('/profile', 'User\UserController@userProfile');
Route::post('/profile', 'User\UserController@updateUserProfile')->name('profile.update');
Route::get('/admin/profile', 'User\UserController@adminProfile');
Route::post('/admin/profile', 'User\UserController@updateAdminProfile')->name('profile.update');




=======
});
>>>>>>> 088b2019b0b7dde29aa321ba30adc9b131577437
