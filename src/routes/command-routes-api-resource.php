<?php

Route::prefix("api")->group(function () {
    Route::apiResource('command', \SJoussin\Http\Controllers\CommandApiController::class);
});

