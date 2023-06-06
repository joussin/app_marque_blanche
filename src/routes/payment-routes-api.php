<?php

Route::middleware(['api', 'auth:sanctum'])->prefix('api')->group(function () {


    Route::get('/payment', '\SJoussin\Http\Controllers\PaymentApiController@index')
         ->name('list.payment.api');

    Route::get('/payment/{id}','\SJoussin\Http\Controllers\PaymentApiController@show')
         ->name('show.payment.api');

    Route::post('/payment', '\SJoussin\Http\Controllers\PaymentApiController@store')
         ->name('store.payment.api');

    Route::put('/payment/{id}', '\SJoussin\Http\Controllers\PaymentApiController@update')
         ->name('update.payment.api');

    Route::delete('/payment/{id}','\SJoussin\Http\Controllers\PaymentApiController@destroy')
         ->name('destroy.payment.api');
});
