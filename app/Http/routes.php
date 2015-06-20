<?php

use Illuminate\Http\Request;

Route::get('/', ['uses' => 'GodpanelController@index', 'as' => 'godpanel.index',
    'middleware' => 'auth']);

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function ()
{
    Route::get('projects', 'ProjectsController@index');
    Route::post('projects', 'ProjectsController@store');
    Route::get('projects/{id}', 'ProjectsController@show');
    Route::put('projects/{id}', 'ProjectsController@update');
    Route::delete('projects/{id}', 'ProjectsController@destroy');

    Route::get('users', 'UsersController@index');

    Route::post('activities', 'ActivityController@store');
    Route::post('activities/{id}/edit', 'ActivityController@update');
    Route::post('activities/{id}/delete', 'ActivityController@destroy');

    Route::get('scheduler/users', 'SchedulerController@users');
    Route::get('scheduler/activities', 'SchedulerController@activities');
    Route::get('scheduler/projects', 'SchedulerController@projects');
});

Route::get('login', ['uses' => 'AuthController@index', 'as' => 'auth.index']);
Route::post('login', ['uses' => 'AuthController@login', 'as' => 'auth.login']);
Route::get('logout', ['uses' => 'AuthController@logout', 'as' => 'auth.logout']);
