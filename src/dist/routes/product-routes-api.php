<?php

Route::middleware(['api'])->prefix('api')->group(function () {


    Route::get('/product', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\ProductApiController@index')
         ->name('list.product.api');

    Route::get('/product/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\ProductApiController@show')
         ->name('show.product.api');

    Route::post('/product', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\ProductApiController@store')
         ->name('store.product.api');

    Route::put('/product/{id}', '\SJoussin\LaravelScaffolder\dist\Http\Controllers\ProductApiController@update')
         ->name('update.product.api');

    Route::delete('/product/{id}','\SJoussin\LaravelScaffolder\dist\Http\Controllers\ProductApiController@destroy')
         ->name('destroy.product.api');
});
