<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

use App\Http\Controllers\AuthController;




/**
 * Basic formula pembuatan route
 */
// Route::{{method}}}('{{uri}}','{{closure}}}');
// Route::{{method}}}('{{uri}}','{{nameController@nameFunction}}}');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource("books", "BookController");
Route::resource("authors", "AuthorController");
