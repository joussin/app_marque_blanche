<?php

Route::prefix("api")->group(function () {
    Route::apiResource('payment', \SJoussin\Http\Controllers\PaymentApiController::class);
});

