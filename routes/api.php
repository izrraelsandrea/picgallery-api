<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\PictureController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function (){
Route::get('/publishers',[PublisherController::class, 'index']);
});

Route::get('/publishers/{id}/galleries', [PublisherController::class, 'galleries']);

Route::get('/galleries/{id}', [GalleryController::class,'show']);
Route::post('/galleries', [GalleryController::class, 'store']);

Route::post('/galleries/{id}/pictures', [PictureController::class, 'store']);
Route::delete('/pictures/{id}', [PictureController::class, 'destroy']);