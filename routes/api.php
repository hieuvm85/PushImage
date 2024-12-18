<?php

use App\Http\Controllers\api\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=> 'auth'],function(){
    //image
    Route::post('image/upload',[ImageController::class, 'upload']);
    Route::get('image/{filename}', [ImageController::class, 'getImage']);
    
} );