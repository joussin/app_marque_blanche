<?php

Route::middleware(['api', 'auth:sanctum'])->prefix('api')->group(function () {


    Route::get('/location', '\SJoussin\Http\Controllers\LocationApiController@index')
         ->name('list.location.api');

    Route::get('/location/{location}','\SJoussin\Http\Controllers\LocationApiController@show')
         ->name('show.location.api');

    Route::post('/location', '\SJoussin\Http\Controllers\LocationApiController@store')
         ->name('store.location.api');

    Route::put('/location/{location}', '\SJoussin\Http\Controllers\LocationApiController@update')
         ->name('update.location.api');

    Route::delete('/location/{location}','\SJoussin\Http\Controllers\LocationApiController@destroy')
         ->name('destroy.location.api');
});
