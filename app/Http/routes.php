<?php

Route::get('/', 'GodpanelController@index');

Route::group(['prefix' => 'api/v1'], function ()
{
    Route::get('projects', 'ProjectsController@index');
    Route::post('projects', 'ProjectsController@store');
    Route::get('projects/{id}', 'ProjectsController@show');
    Route::put('projects/{id}', 'ProjectsController@update');
    Route::delete('projects/{id}', 'ProjectsController@destroy');

    Route::get('users', 'UsersController@index');
});

Route::get('scheduler', function ()
{
    return view('scheduler');
});
