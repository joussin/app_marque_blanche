<?php

Route::prefix("api")->group(function () {
    Route::apiResource('user', \SJoussin\Http\Controllers\UserApiController::class);
});

