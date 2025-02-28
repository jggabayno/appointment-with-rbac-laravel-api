<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login', 'LoginController@index');
// Route::post('/logout', 'LogoutController@index');
Route::post('/register', 'RegisterController@index');
Route::put('/resetpassword/{user}', 'ResetPasswordController@update');

Route::group(['middleware' => 'auth:api'], function() {

    Route::group(['middleware' => 'isAdmin'], function() {

        Route::get('/accesses', 'AccessController@index');
        Route::post('/accesses', 'AccessController@store');
        Route::put('/accesses/{access}', 'AccessController@update');
        Route::delete('accesses/{access}', 'AccessController@destroy');

        Route::put('/users/{user}', 'UserController@update');
        Route::delete('/users/{user}', 'UserController@destroy');
        Route::get('/users/access', 'UserAccessController@index');

        Route::get('/roleAccesses', 'RoleAccessController@index');

        Route::get('/employees', 'EmployeeController@index');

        Route::post('/workinghours', 'WorkingHourController@store');
        Route::put('/workinghours/{workinghour}', 'WorkingHourController@update');
        Route::delete('/workinghours/{workinghour}', 'WorkingHourController@destroy');

    });

    Route::group(['middleware' => 'isAdmin','isEmployee'], function() {
        Route::get('/workinghours', 'WorkingHourController@index');
    });

    Route::group(['middleware' => 'isEmployee'], function() {

        Route::get('/employeeworkinghour', 'EmployeeWorkingHourController@index');

        Route::get('/appointments', 'AppointmentController@index');

    });


});
