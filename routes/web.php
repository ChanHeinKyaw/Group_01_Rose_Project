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
// use App\Http\Controllers\Contact\ContactController;
// use App\Http\Controllers\User\UserController;

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

    Route::get('/report', [RecordController::class, 'createViewReport'])->name('report');
    Route::post('/report', [RecordController::class, 'createReport'])->name('post#report');


    Route::get('/contact', [PageController::class, 'contact']);
    Route::get('/about', [PageController::class, 'about']);
    Route::get('/profile', [PageController::class, 'profile']);

    Route::get('/post/{id}/detail', [PageController::class, 'postDetail']);
    Route::get('like/{id}',"LikeController@like");
    Route::post('comment/{id}',"CommentController@comment");
    Route::get('comment-overview',"CommentController@commentOverview");
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isadmin']], function () {
    //Admin Panel
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/user', [UserController::class, 'index']);

    Route::resource('/post','Admin\PostController');

    //Route::get('/post',[PostController::class, 'index'])->name('post.index');
    //Route::get('/post/create',[PostController::class, 'create'])->name('post.create');
    //Route::post('/post/create',[PostController::class, 'store'])->name('post.store');
    //Route::get('/post/{id}/edit',[PostController::class, 'edit'])->name('post.edit');
    //Route::post('/post/{id}',[PostController::class, 'update'])->name('post.update');
    //Route::post('/post/{id}',[PostController::class, 'destroy'])->name('post.destroy');

    Route::get('/graph', [GraphController::class, 'index']);
    Route::get('/record', [RecordController::class, 'index']);
    Route::get('/contact', [ContactUsController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);

    Route::get('/graph', [RecordController::class, 'graphView']);
    Route::get('/graph-data', [RecordController::class, 'graph']);


    Route::get('/record', [RecordController::class, 'showViewRecord'])->name('admin#record');
    Route::get('/export', [RecordController::class, 'export'])->name('admin#export');
    Route::post('/import', [RecordController::class, 'import'])->name('admin#import');


    Route::get('/contact-us', [ContactUsController::class, 'index']);
    Route::get('/profile', [AdminProfileController::class, 'index']);

    Route::get('/contact', [ContactUsController::class, 'contactList']);
    Route::delete('/contact/{id}', [ContactUsController::class, 'deleteContactById'])->name('contact.delete');
    Route::get('/contact/search', [ContactUsController::class, 'searchContact'])->name('contact.search');

    Route::get('/user', [UserController::class, 'userList']);
    Route::post('/user', [UserController::class, 'userList']);
    Route::post('/user/{id}', [UserController::class, 'updateUserRole'])->name('user.change-role');
    Route::get('/search', [UserController::class, 'searchUser'])->name('user.search');
    Route::get('/admin/profile', [UserController::class, 'adminProfile']);
    Route::post('/admin/profile', [UserController::class, 'updateAdminProfile'])->name('admin-profile.update');
});

Route::get('/contact-form', [ContactUsController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [ContactUsController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('/profile', [UserController::class, 'userProfile']);
Route::post('/profile', [UserController::class, 'updateUserProfile'])->name('profile.update');
