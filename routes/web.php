<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', "GuestController@index")->name('index');
Route::get('/carbooking', "GuestController@carbooking")->name('carbooking.index');
Route::get('/blog', 'GuestController@blog')->name('blog.index');
Route::get('/about', 'GuestController@about')->name('about.index');
Route::get('/contact-us', 'GuestController@contact')->name('contact.index');
Route::post('/contact-us', 'GuestController@store')->name('contact.store');
Route::get('/verify/logout', 'GuestController@verifyLogout')->name('verifyLogout');
Route::get('/services', 'GuestController@services')->name('services.index');
Route::get('/offers', 'GuestController@offers')->name('offers.index');
Route::get('/news/{id}', 'GuestController@blogInfo')->name('blog.show');

Route::post('/train-booking-list', 'GuestController@booking')->name('booking.create');

/*
Legal Routes
*/
Route::get('terms-and-conditions', 'GuestController@terms')->name('terms');
Route::get('privacy-policy', 'GuestController@privacy')->name('privacy');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

// PayStack Route
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::get('/congratulation', 'GuestController@finish')->name('finish');




Route::get('/old', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/user/admin', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'name' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/dashboard', "HomeController@index")->name('home');

    Route::get('/locations', "LocationController@index")->name('locate.index');
    Route::post('/locations', "LocationController@store")->name('locate.store');

    //Train Routes
    Route::get('/train', "TrainController@index")->name('train.index');
    Route::get('/train/create', "TrainController@create")->name('train.create');
    Route::post('/train', "TrainController@store")->name('train.store');
    Route::patch('/train/update', "TrainController@update")->name('train.update');
    //Route::get('/train/edit/{$id}', "TrainController@edit")->name('train.edit');
    //Route::delete('/train/delete/{$id}', "TrainController@store")->name('train.store');

    Route::get('/train/trips', "TripsController@index")->name('trips.index');
    Route::get('/train/trips/create', "TripsController@create")->name('trips.create');
    Route::post('/train/trips', "TripsController@store")->name('trips.store');

    Route::get('/train/tickets', "TrainTicketController@index")->name('ticket.index');
    Route::post('/train/tickets', "TrainTicketController@store")->name('ticket.store');
});
