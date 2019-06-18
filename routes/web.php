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

Route::get('/terms-of-service', 'PagesController@termsAndConditions');

Route::get('/user-agreement', 'PagesController@userAgreement');

Route::get('/privacy-policy', 'PagesController@privacyPolicy');

Auth::routes(['verify' => true]);

Route::get('/home', 'PagesController@index')->name('home');


//candidates

Route::get('/candidate-register', 'CandidatesController@index')->name('candidateRegForm');

Route::get('/candidate-dashboard', 'CandidatesController@show')->name('candidateDashboard');

Route::post('/candidate-register', 'CandidatesController@create')->name('createCandidate');

//Route::update('/candidate-update', 'CandidatesController@update')->name('candidate.update');



//end of candidates route