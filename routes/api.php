<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/question', QuestionController::class);
Route::apiResource('/category', CategoryController::class);
