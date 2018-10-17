<?php

/**
 * Author: Uilan
 * Date: 2018-10-16
 * System: Library of Books
 */

Route::group(['prefix'=>'api'],function()
{
    Route::group(['prefix'=>'library'],function()
    {
        Route::get('',['uses'=>'LibraryController@allLibraries']);

        Route::get('{id}',['uses'=>'LibraryController@getLibrary']);
        
        Route::post('',['uses'=>'LibraryController@saveLibrary']);

        Route::put('{id}',['uses'=>'LibraryController@updateLibrary']);

        Route::delete('{id}',['uses'=>'LibraryController@deleteLibrary']);

    });
});

//Default router
Route::get('/', function () {
    return view('welcome');
    
});

