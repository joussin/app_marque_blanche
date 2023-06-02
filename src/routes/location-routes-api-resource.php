<?php

Route::prefix("api")->group(function () {
    Route::apiResource('location', \SJoussin\Http\Controllers\LocationApiController::class);
});

