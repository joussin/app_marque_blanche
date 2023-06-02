<?php

Route::prefix("api")->group(function () {
    Route::apiResource('delivery', \SJoussin\Http\Controllers\DeliveryApiController::class);
});

