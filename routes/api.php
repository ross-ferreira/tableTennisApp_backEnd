<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Players;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user(); 
});

Route::group(["prefix" => "players"], function () {
    // GET /articles: show all articles
    Route::get("", [Players::class, "index"]);
    // POST /articles: create a new article
    Route::post("", [Players::class, "store"]);


    Route::group(["prefix" => "{player}"], function () {
        
        Route::get("", [Players::class, "show"]);

        Route::put("", [Players::class, "update"]);

        Route::delete("", [Players::class, "destroy"]);
    });

});





