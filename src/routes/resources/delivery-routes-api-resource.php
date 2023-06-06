<?php

Route::middleware(["auth:sanctum"])->prefix("api")->group(function () {
    Route::apiResource('delivery', \SJoussin\Http\Controllers\DeliveryApiController::class);
});

