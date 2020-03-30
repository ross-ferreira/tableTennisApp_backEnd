<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Players;
use App\Http\Controllers\API\Leagues;

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

Route::group(["prefix" => "leagues"], function () {
    // GET /articles: show all articles
    Route::get("", [Leagues::class, "index"]);
    // POST /articles: create a new article
    Route::post("", [Leagues::class, "store"]);


    Route::group(["prefix" => "{league}"], function () {
        
        Route::get("", [Leagues::class, "show"]);

        Route::put("", [Leagues::class, "update"]);

        Route::delete("", [Leagues::class, "destroy"]);
    });

});





