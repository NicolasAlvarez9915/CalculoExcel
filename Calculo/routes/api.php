<?php

use App\Http\Controllers\ChocieController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerPrueba;
use App\Http\Controllers\PoliticPartyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('Chocie')->group(function (){
    Route::get('/all',[ChocieController::class, 'Chocies']);
    Route::post('/Create',[ChocieController::class, 'CreateChocie']);
});

Route::prefix('PoliticParty')->group(function (){
    Route::get('/all',[PoliticPartyController::class, 'index']);
});
