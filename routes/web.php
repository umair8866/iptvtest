<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
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

Route::group(['middleware' => 'admin'], function () {

Route::get('/login', function () {
    return view('/login');
})->name('login');


Route::get('/',[PageController::class,'videoplayer'])->name('video');
Route::get('/videoplayer',[PageController::class,'videoplayer'])->name('video');


Route::get('/admin',[PageController::class,'dashboard'])->name('admin');
Route::get('/admin/dashboard',[PageController::class,'dashboard'])->name('admin');
Route::get('/admin/channels',[PageController::class,'channels']);
Route::get('/admin/addchannel',[PageController::class,'addchannelview']);
Route::post('/admin/addnewchannel',[PageController::class,'addchannel']);
Route::post('/getvideo',[PageController::class,'getvideourl'])->name('getvideo');
Route::get('/admin/editchannel/{id}',[PageController::class,'editchannel']);
Route::post('/admin/editnewchannel/{id}',[PageController::class,'updatechannel']);
Route::get('/admin/deletechannel/{id}',[PageController::class,'deletechannel']);

Route::get('/admin/company',[PageController::class,'company']);
Route::get('/admin/addcompany',[PageController::class,'addcompanyview']);
Route::post('/admin/addnewcompany',[PageController::class,'addcompany']);
Route::get('/admin/editcompany/{id}',[PageController::class,'editcompany']);
Route::post('/admin/editnewcompany/{id}',[PageController::class,'updatecompany']);
Route::get('/admin/deletecompany/{id}',[PageController::class,'deletecompany']);

Route::get('/admin/movies',[PageController::class,'movie']);
Route::get('/admin/addmovie',[PageController::class,'addmovieview']);
Route::post('/admin/addnewmovie',[PageController::class,'addmovie']);
Route::get('/admin/editmovie/{id}',[PageController::class,'editmovie']);
Route::post('/admin/editnewmovie/{id}',[PageController::class,'updatemovie']);
Route::get('/admin/deletemovie/{id}',[PageController::class,'deletemovie']);

Route::get('/admin/categories',[PageController::class,'category']);
Route::get('/admin/addcategory',[PageController::class,'addcategoryview']);
Route::post('/admin/addnewcategory',[PageController::class,'addcategory']);
Route::get('/admin/editcategory/{id}',[PageController::class,'editcategory']);
Route::post('/admin/editnewcategory/{id}',[PageController::class,'updatecategory']);
Route::get('/admin/deletecategory/{id}',[PageController::class,'deletecategory']);

Route::get('/admin/pcategories',[PageController::class,'pcategory']);
Route::get('/admin/addpcategory',[PageController::class,'addpcategoryview']);
Route::post('/admin/addnewpcategory',[PageController::class,'addpcategory']);
Route::get('/admin/editpcategory/{id}',[PageController::class,'editpcategory']);
Route::post('/admin/editnewpcategory/{id}',[PageController::class,'updatepcategory']);
Route::get('/admin/deletepcategory/{id}',[PageController::class,'deletepcategory']);

Route::get('/admin/products',[PageController::class,'product']);
Route::get('/admin/addproduct',[PageController::class,'addproductview']);
Route::post('/admin/addnewproduct',[PageController::class,'addproduct']);
Route::get('/admin/editproduct/{id}',[PageController::class,'editproduct']);
Route::post('/admin/editnewproduct/{id}',[PageController::class,'updateproduct']);
Route::get('/admin/deleteproduct/{id}',[PageController::class,'deleteproduct']);

Route::get('/admin/floors',[OrderController::class,'floors']);
Route::get('/admin/addfloor',[OrderController::class,'addfloorview']);
Route::post('/admin/addnewfloor',[OrderController::class,'addfloor']);
Route::get('/admin/editfloor/{id}',[OrderController::class,'editfloor']);
Route::post('/admin/editnewfloor/{id}',[OrderController::class,'updatefloor']);
Route::get('/admin/deletefloor/{id}',[OrderController::class,'deletefloor']);

Route::get('/admin/rooms',[OrderController::class,'rooms']);
Route::get('/admin/addroom',[OrderController::class,'addroomview']);
Route::post('/admin/addnewroom',[OrderController::class,'addroom']);
Route::get('/admin/editroom/{id}',[OrderController::class,'editroom']);
Route::post('/admin/editnewroom/{id}',[OrderController::class,'updateroom']);
Route::get('/admin/deleteroom/{id}',[OrderController::class,'deleteroom']);

Route::get('/admin/guests',[OrderController::class,'guests']);
Route::get('/admin/addguest',[OrderController::class,'addguestview']);
Route::post('/admin/addnewguest',[OrderController::class,'addguest']);
Route::get('/admin/editguest/{id}',[OrderController::class,'editguest']);
Route::post('/admin/editnewguest/{id}',[OrderController::class,'updateguest']);
Route::get('/admin/deleteguest/{id}',[OrderController::class,'deleteguest']);
Route::post('/admin/getroom',[OrderController::class,'getroomnum'])->name('getroom');



});


Auth::routes();
Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
