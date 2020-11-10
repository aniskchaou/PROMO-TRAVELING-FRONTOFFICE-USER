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

Route::get('/','\App\Http\Controllers\HomeController@index')->name('home.home');
Route::get('/tour','\App\Http\Controllers\TourController@index')->name('home.tour');
Route::get('/offer','\App\Http\Controllers\OfferController@index')->name('home.offer');
Route::get('/blog','\App\Http\Controllers\BlogController@index')->name('home.blog');
Route::get('/contact','\App\Http\Controllers\ContactController@index')->name('home.contact');
