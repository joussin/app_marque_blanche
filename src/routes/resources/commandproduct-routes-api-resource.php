<?php

Route::middleware(["auth:sanctum"])->prefix("api")->group(function () {
    Route::apiResource('commandproduct', \SJoussin\Http\Controllers\CommandProductApiController::class);
});

