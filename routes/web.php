<?php

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

/*  Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){
Route::get('/admin','\App\Http\Controllers\HomeController@admin_dashboard');
});  */

//Auth
Auth::routes();
Route::get('/admin','\App\Http\Controllers\HomeController@admin_dashboard')->middleware('auth');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//login
Route::get('login', array('uses' => 'HomeController@showLogin'))->name('login.show');;
Route::get('login', array('uses' => 'HomeController@showLogin'))->name('login');

Route::get('myprofile', array('uses' => 'HomeController@admin_profile'))->name('myprofile');

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'))->name('login.proccess');;

Route::get('/','\App\Http\Controllers\HomeController@index')->name('home.home');
Route::get('/tour','\App\Http\Controllers\TourController@index')->name('home.tour');
Route::get('/offer','\App\Http\Controllers\OfferController@index')->name('home.offer');
Route::get('/blog','\App\Http\Controllers\BlogController@index')->name('home.blog');
Route::get('/contact','\App\Http\Controllers\ContactController@index')->name('home.contact');
Route::get('/dashboard','\App\Http\Controllers\HomeController@admin_dashboard')->name('admin.dashboard');

//admin

//blog
Route::get('/blog/create','\App\Http\Controllers\BlogController@create')->name('blog.create');
Route::post('/blog/store','\App\Http\Controllers\BlogController@store')->name('blog.store');
Route::get('/blog/delete/{id}','\App\Http\Controllers\BlogController@destroy')->name('blog.destroy');
Route::get('/blog/edit/{id}','\App\Http\Controllers\BlogController@edit')->name('blog.edit');;
Route::post('/blog/update/{id}','\App\Http\Controllers\BlogController@update')->name('blog.update');
Route::get('/blog/index','\App\Http\Controllers\BlogController@adminindex');

//destination
Route::get('/destination/create','\App\Http\Controllers\DestinationController@create')->name('destination.create')->middleware('auth');
Route::post('/destination/store','\App\Http\Controllers\DestinationController@store')->name('destination.store')->middleware('auth');
Route::get('/destination/delete/{id}','\App\Http\Controllers\DestinationController@destroy')->name('destination.destroy')->middleware('auth');
Route::get('/destination/edit/{id}','\App\Http\Controllers\DestinationController@edit')->name('destination.edit')->middleware('auth');
Route::post('/destination/update/{id}','\App\Http\Controllers\DestinationController@update')->name('destination.update')->middleware('auth');
Route::get('/destination/index','\App\Http\Controllers\DestinationController@index')->middleware('auth');

//hotel
Route::get('/hotel/create','\App\Http\Controllers\HotelController@create')->name('hotel.create')->middleware('auth');
Route::post('/hotel/store','\App\Http\Controllers\HotelController@store')->name('hotel.store')->middleware('auth');
Route::get('/hotel/delete/{id}','\App\Http\Controllers\HotelController@destroy')->name('hotel.destroy')->middleware('auth');
Route::get('/hotel/edit/{id}','\App\Http\Controllers\HotelController@edit')->name('hotel.edit')->middleware('auth');;
Route::post('/hotel/update/{id}','\App\Http\Controllers\HotelController@update')->name('hotel.update')->middleware('auth');
Route::get('/hotel/index','\App\Http\Controllers\HotelController@index')->middleware('auth');

//package
Route::get('/package/create','\App\Http\Controllers\PackageController@create')->name('package.create')->middleware('auth');
Route::post('/package/store','\App\Http\Controllers\PackageController@store')->name('package.store')->middleware('auth');
Route::get('/package/delete/{id}','\App\Http\Controllers\PackageController@destroy')->name('package.destroy')->middleware('auth');
Route::get('/package/edit/{id}','\App\Http\Controllers\PackageController@edit')->name('package.edit')->middleware('auth');;
Route::post('/package/update/{id}','\App\Http\Controllers\PackageController@update')->name('package.update')->middleware('auth');
Route::get('/package/index','\App\Http\Controllers\PackageController@index')->middleware('auth');

//service
Route::get('/service/create','\App\Http\Controllers\ServiceController@create')->name('service.create')->middleware('auth');
Route::post('/service/store','\App\Http\Controllers\ServiceController@store')->name('service.store')->middleware('auth');
Route::get('/service/delete/{id}','\App\Http\Controllers\ServiceController@destroy')->name('service.destroy')->middleware('auth');
Route::get('/service/edit/{id}','\App\Http\Controllers\ServiceController@edit')->name('service.edit')->middleware('auth');;
Route::post('/service/update/{id}','\App\Http\Controllers\ServiceController@update')->name('service.update')->middleware('auth');
Route::get('/service/index','\App\Http\Controllers\ServiceController@index')->middleware('auth');

//slider
Route::get('/slider/create','\App\Http\Controllers\SliderController@create')->name('slider.create')->middleware('auth');
Route::post('/slider/store','\App\Http\Controllers\SliderController@store')->name('slider.store')->middleware('auth');
Route::get('/slider/delete/{id}','\App\Http\Controllers\SliderController@destroy')->name('slider.destroy')->middleware('auth');
Route::get('/slider/edit/{id}','\App\Http\Controllers\SliderController@edit')->name('slider.edit')->middleware('auth');;
Route::post('/slider/update/{id}','\App\Http\Controllers\SliderController@update')->name('slider.update')->middleware('auth');
Route::get('/slider/index','\App\Http\Controllers\SliderController@index')->middleware('auth');

//subscriber
Route::get('/subscriber/create','\App\Http\Controllers\SubscriberController@create')->name('subscriber.create')->middleware('auth');
Route::post('/subscriber/store','\App\Http\Controllers\SubscriberController@store')->name('subscriber.store')->middleware('auth');
Route::get('/subscriber/delete/{id}','\App\Http\Controllers\SubscriberController@destroy')->name('subscriber.destroy')->middleware('auth');
Route::get('/subscriber/edit/{id}','\App\Http\Controllers\SubscriberController@edit')->name('subscriber.edit')->middleware('auth');;
Route::post('/subscriber/update/{id}','\App\Http\Controllers\SubscriberController@update')->name('subscriber.update')->middleware('auth');
Route::get('/subscriber/index','\App\Http\Controllers\SubscriberController@index')->middleware('auth');

//testimonials
Route::get('/testimonial/create','\App\Http\Controllers\TestimonialsController@create')->name('testimonial.create')->middleware('auth');
Route::post('/testimonial/store','\App\Http\Controllers\TestimonialsController@store')->name('testimonial.store')->middleware('auth');
Route::get('/testimonial/delete/{id}','\App\Http\Controllers\TestimonialsController@destroy')->name('testimonial.destroy')->middleware('auth');
Route::get('/testimonial/edit/{id}','\App\Http\Controllers\TestimonialsController@edit')->name('testimonial.edit')->middleware('auth');;
Route::post('/testimonial/update/{id}','\App\Http\Controllers\TestimonialsController@update')->name('testimonial.update')->middleware('auth');
Route::get('/testimonial/index','\App\Http\Controllers\TestimonialsController@index')->middleware('auth');

//travelbooking
Route::get('/travelbooking/create','\App\Http\Controllers\TravelBookingController@create')->name('travelbooking.create')->middleware('auth');
Route::post('/travelbooking/store','\App\Http\Controllers\TravelBookingController@store')->name('travelbooking.store')->middleware('auth');
Route::get('/travelbooking/delete/{id}','\App\Http\Controllers\TravelBookingController@destroy')->name('travelbooking.destroy')->middleware('auth');
Route::get('/travelbooking/edit/{id}','\App\Http\Controllers\TravelBookingController@edit')->name('travelbooking.edit')->middleware('auth');;
Route::post('/travelbooking/update/{id}','\App\Http\Controllers\TravelBookingController@update')->name('travelbooking.update')->middleware('auth');
Route::get('/travelbooking/index','\App\Http\Controllers\TravelBookingController@index')->middleware('auth');

//traveller
Route::get('/traveller/create','\App\Http\Controllers\TravellerController@create')->name('traveller.create')->middleware('auth');
Route::post('/traveller/store','\App\Http\Controllers\TravellerController@store')->name('traveller.store')->middleware('auth');
Route::get('/traveller/delete/{id}','\App\Http\Controllers\TravellerController@destroy')->name('traveller.destroy')->middleware('auth');
Route::get('/traveller/edit/{id}','\App\Http\Controllers\TravellerController@edit')->name('traveller.edit')->middleware('auth');;
Route::post('/traveller/update/{id}','\App\Http\Controllers\TravellerController@update')->name('traveller.update')->middleware('auth');
Route::get('/traveller/index','\App\Http\Controllers\TravellerController@index')->middleware('auth');