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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('/current-openings', 'PagesController@currentOpenings');

Route::get('/available-contracts', 'PagesController@availableContracts');

Route::get('/faq', 'PagesController@faq');


Route::get('/login', 'PagesController@loginSignup');

Route::post('/login', 'PagesController@loginSignup');

Route::get('/register', 'RegisterController@test');

Route::get('/terms-of-service', 'PagesController@termsAndConditions');

Route::get('/user-agreement', 'PagesController@userAgreement');

Route::get('/privacy-policy', 'PagesController@privacyPolicy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
