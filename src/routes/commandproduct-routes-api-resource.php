<?php

Route::prefix("api")->group(function () {
    Route::apiResource('commandproduct', \SJoussin\Http\Controllers\CommandProductApiController::class);
});

