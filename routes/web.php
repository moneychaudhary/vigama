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
})->name('home');

Route::post('/enquiry/create', 'EnquiryController@create')->name('enquiry.create');


Route::get('/send-otp/{mobile}', 'VoteController@sendOtp');

Route::post('/vote/{id}', 'VoteController@voteIntiate');

Route::get('/vote-success', function () {
    return view('vote_success');
})->name('vote-success');

Route::get('/vote-error', function () {
    return view('vote_error');
})->name('vote-error');

Route::get('/enquiry-success', function () {
    return view('enquiry_success');
})->name('enquiry-success');

Route::get('/vote-submit','VoteController@voteSubmit') ;
Route::post('/vote-submit/{namespace}','VoteController@create') ;



