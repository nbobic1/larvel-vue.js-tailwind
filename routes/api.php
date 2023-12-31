<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoviController;
use App\Http\Controllers\FlightController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/moja',[NoviController::class,'NoviControllerAction']);
Route::post('/moja',[NoviController::class,'dd']);
 
Route::resource('/flights', FlightController::class)
        ->missing(function (Request $request) {
            echo "Please";
            return Redirect::route('/moja');
        });