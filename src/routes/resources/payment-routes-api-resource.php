<?php

Route::middleware(["auth:sanctum"])->prefix("api")->group(function () {
    Route::apiResource('payment', \SJoussin\Http\Controllers\PaymentApiController::class);
});

