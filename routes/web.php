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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');

});
Route::get('/logout', function () {
    return view('auth.login');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('species', 'SpeciesController');

Route::get('/species/{id}', 'SpeciesController@show'); 

Route::get('species/{id}/care' , 'SpeciesController@care');



// Route::resource('user_species', 'UserSpeciesController');




// Route::get('/plants', 'PlantsController@index');
// Route::get('/plants/create', 'PlantsController@create');
// Route::get('/plants/{plant}', 'PlantsController@show'); 
// Route::post('/plants', 'PlantsController@store');
// Route::get('/plants/{plant}/edit', 'PlantsController@edit');
// Route::patch('/plants/{plant}', 'PlantsController@update'); 
// Route::delete('/plants/{plant}', 'PlantsController@destroy'); 




