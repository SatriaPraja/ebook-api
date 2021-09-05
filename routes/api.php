<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Basic formula pembuatan route
 */
// Route::{{method}}}('{{uri}}','{{closure}}}');
// Route::{{method}}}('{{uri}}','{{nameController@nameFunction}}}');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/me','App\Http\Controllers\AuthController@me');

