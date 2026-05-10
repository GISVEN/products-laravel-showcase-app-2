<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'index'])
    ->name('login-submit')
    ->middleware(\Illuminate\Cookie\Middleware\EncryptCookies::class, \Illuminate\Session\Middleware\StartSession::class);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', static function (Request $request) {
        return $request->user();
    });

    Route::post('/tokens/create', static function (Request $request) {
        $token = $request->user()->createToken($request->token_name, ['product-edit']);
        return ['token' => $token->plainTextToken];
    });

    Route::prefix('products')->middleware('ability:product-edit')->group(function () {
        Route::resource('/', ProductController::class);
    });
});
