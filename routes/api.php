<?php

use App\Http\Controllers\MandiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//-
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {//-
    return $request->user();//-
});//-
Route::get('/commodities', [MandiController::class, 'fetchCommoditiesData']);

