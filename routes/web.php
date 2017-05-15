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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/enquiry/create','EnquiryController@create')->name('enquiry.create');


Route::post('/send-otp/{mobile}','VoteController@sendOtp');
Route::post('/vote/{id}','VoteController@vote')->name('vote');

Route::get('/vote-success', function () {
    return view('vote_success');
})->name('vote-success');

Route::get('/vote-error', function () {
    return view('vote_error');
})->name('vote-error');
Route::get('/enquiry-success', function () {
    return view('enquiry_success');
})->name('enquiry-success');


