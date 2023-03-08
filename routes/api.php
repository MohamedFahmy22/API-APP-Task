<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/getAllCat',[CategoryController::class,'show']);
Route::get('/getCat/{id}',[CategoryController::class,'index']);
Route::post('/updateCategory/{id}',[CategoryController::class,'update']);
Route::post('/storeCategory',[CategoryController::class,'store']);
Route::post('/deleteCategory/{id}',[CategoryController::class,'destroy']);


////////////////*****************//////////////

Route::get('/getAllposts',[PostController::class,'get_posts']);


