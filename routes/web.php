<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|s
*/

Route::get('/', function () {
    return view('/layouts/app');
});
// article routing
route::view('articlelist',"/articlelist");
route::view('create-blog',"/createBlog");

route::view('adinventory',"/inventory");

route::view('adinbox','/inbox');

route::view('adauthentication','/adauth');

route::view('landing','landing');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dash',[App\Http\Controllers\AdminController::class,'index'])->name('home');
    Route::resource('role', App\Http\Controllers\UserPartController::class);
    Route::resource('permission', App\Http\Controllers\PermissionController::class);
    Route::resource('p_component', App\Http\Controllers\SectionController::class);
    // blog routing
    Route::resource('blog', App\Http\Controllers\BlogController::class);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
