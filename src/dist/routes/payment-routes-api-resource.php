<?php

Route::prefix("api")->group(function () {
    Route::apiResource('payment', \SJoussin\LaravelScaffolder\dist\Http\Controllers\PaymentApiController::class);
});

