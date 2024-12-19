<?php

use App\Http\Controllers\Api\UserDataApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/list',[UserDataApiController::class,'getAllRecord'])->name('list')->middleware('auth:sanctum');