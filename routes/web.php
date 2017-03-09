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
/* #### INFORMATIONS #### */
    Route::get('/informacoes/{name?}', 'InformationsController@listInformations')->name('informations');

/* #### LOCATIONS #### */
    // Submission form
    Route::get('/locais/submeter', 'LocationsController@submitLocationForm')->name('submit-location-form');
    // Location view
    Route::get('/locais/id/{id}', 'LocationsController@view')->name('location-view');
    // List locations from state
    Route::get('/locais/{state}', 'LocationsController@listLocations')->name('locations');
    // List current states
    Route::get('/locais/', 'LocationsController@listStates')->name('locations-all');
    // Submission POST
    Route::post('/locais/submeter', 'LocationsController@submitLocation')->name('submit-location');

/* #### AUTHENTICATION #### */
    Auth::routes();
    Route::get('/logout', 'UsersController@logout');


/* #### OTHERS #### */
    Route::get('/dashboard', 'HomeController@dashboard');
    Route::get('/', 'HomeController@index')->name('home');