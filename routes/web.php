<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';
Route::get('/userlogin-with-otp', [UserController::class, 'userLoginWithMobile']);
