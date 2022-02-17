<?php

use Illuminate\Support\Facades\Route;
use modules\DataCollection\Controllers\DataCollectionController;


Route::middleware('auth:sanctum')->group(function () {

    Route::post('v1/users',  [DatacollectionController::class, 'index']);


});

