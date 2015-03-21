<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
|*/

/*
|--------------------------------------------------------------------------
| Redireccionador Principal
|--------------------------------------------------------------------------
|
*/
Route::group(array('before' => 'auth'), function() {
    Route::get('/', ['as' => 'home', 'uses' => 'UsersController@dashboard']);
    Route::get('/profile', 'UsersController@profile');
});

/*
|--------------------------------------------------------------------------
| User Routes for Registration
|--------------------------------------------------------------------------
|
*/

Route::get('/register', 'RegistrationController@create');
Route::post('/register', ['as' => 'registration.store', 'uses' => 'RegistrationController@store']);


/*
|--------------------------------------------------------------------------
| Routes for Login
|--------------------------------------------------------------------------
|
*/
Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);


/*
|--------------------------------------------------------------------------
| Routes for API
|--------------------------------------------------------------------------
|
*/
Route::post('/api/login', 'ApiController@login');
Route::resource('/api', 'ApiController');
Route::get('/api/request/{data}/','RequestController@index');
