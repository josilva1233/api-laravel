<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\V1\UserController;
use App\Http\Controllers\api\V1\InvoiceController;

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::prefix('v1')->group(function(){
    Route::get('/users',[UserController::class, 'index']);
    Route::get('/Invoice',[InvoiceController::class, 'index']);
});


