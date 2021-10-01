<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/**
 * Basic formula pembuatan route
 */
// Route::{{method}}}('{{uri}}','{{closure}}}');
// Route::{{method}}}('{{uri}}','{{nameController@nameFunction}}}');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/me','App\Http\Controllers\AuthController@me');


Route::get('/book', [BookController::class, 'index']);
Route::post('/book', [BookController::class, 'store']);
Route::get('/book/{id}', [BookController::class, 'show']);
Route::put('/book/{id}', [BookController::class, 'update']);
Route::delete('/book/{id}', [BookController::class, 'destroy']);
Route::resource('book', BookController::class)->except('edit', 'create');
