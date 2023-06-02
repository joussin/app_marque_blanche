<?php

Route::middleware(['web'])->prefix('')->group(function () {

    Route::get('/product', '\SJoussin\Http\Controllers\ProductController@index')
         ->name('list.product.front');

    Route::get('/product/create','\SJoussin\Http\Controllers\ProductController@create')
         ->name('create.product.front');

    Route::get('/product/{id}','\SJoussin\Http\Controllers\ProductController@show')
         ->name('show.product.front');

    Route::get('/product/{id}/edit','\SJoussin\Http\Controllers\ProductController@edit')
         ->name('edit.product.front');

    Route::post('/product', '\SJoussin\Http\Controllers\ProductController@store')
         ->name('store.product.front');

    Route::put('/product/{id}', '\SJoussin\Http\Controllers\ProductController@update')
         ->name('update.product.front');

    Route::delete('/product/{id}','\SJoussin\Http\Controllers\ProductController@destroy')
         ->name('destroy.product.front');
});
