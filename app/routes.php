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
\Debugbar::disable();
/*
|--------------------------------------------------------------------------
| Redireccionador Principal
|--------------------------------------------------------------------------
|
*/
Route::group(array('before' => 'auth'), function() {
    Route::get('/', ['as' => 'home', 'uses' => 'UsersController@dashboard']);
    Route::get('/profile', 'UsersController@profile');
    Route::get('/sensor/{id}', 'SensorsController@show');
    Route::get('/calendar', 'CalendarController@index');
    Route::get('/sensors', 'ConfigController@sensors');
    Route::get('/notifications', 'ConfigController@notifications');
    Route::get('/support', 'SupportController@index');
    Route::get('/help', 'HelpControllers@index');
    Route::get('/functions', 'FunctionsController@index');
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
Route::get('/api/request/{data}/','RequestController@index');

/*
|--------------------------------------------------------------------------
| Routes for FAKER
|--------------------------------------------------------------------------
|
*/

    Route::any('/upload/frame/{data}/', 'DataController@create');

//7E01492013A2040B1E1A38AF6110140124E6B
