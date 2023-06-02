<?php

Route::middleware(['web'])->prefix('')->group(function () {

    Route::get('/user', '\SJoussin\Http\Controllers\UserController@index')
         ->name('list.user.front');

    Route::get('/user/create','\SJoussin\Http\Controllers\UserController@create')
         ->name('create.user.front');

    Route::get('/user/{id}','\SJoussin\Http\Controllers\UserController@show')
         ->name('show.user.front');

    Route::get('/user/{id}/edit','\SJoussin\Http\Controllers\UserController@edit')
         ->name('edit.user.front');

    Route::post('/user', '\SJoussin\Http\Controllers\UserController@store')
         ->name('store.user.front');

    Route::put('/user/{id}', '\SJoussin\Http\Controllers\UserController@update')
         ->name('update.user.front');

    Route::delete('/user/{id}','\SJoussin\Http\Controllers\UserController@destroy')
         ->name('destroy.user.front');
});
