<?php

Route::middleware(['api', 'auth:sanctum'])->prefix('api')->group(function () {


    Route::get('/product', '\SJoussin\Http\Controllers\ProductApiController@index')
         ->name('list.product.api');

    Route::get('/product/{id}','\SJoussin\Http\Controllers\ProductApiController@show')
         ->name('show.product.api');

    Route::post('/product', '\SJoussin\Http\Controllers\ProductApiController@store')
         ->name('store.product.api');

    Route::put('/product/{id}', '\SJoussin\Http\Controllers\ProductApiController@update')
         ->name('update.product.api');

    Route::delete('/product/{id}','\SJoussin\Http\Controllers\ProductApiController@destroy')
         ->name('destroy.product.api');
});
