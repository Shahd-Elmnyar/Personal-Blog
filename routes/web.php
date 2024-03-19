<?php

use App\Http\Controllers\admin\ArticleController as AdminArticleController;
use App\Http\Controllers\web\ArticleController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class,'index']);
Route::get("/articles",[ArticleController::class,'index']);
Route::get("/articles/show/{article}",[ArticleController::class,'show']);
Route::post("/message/send",[ContactController::class,'send']);



Route::prefix('dashboard')->group(function () {
    Route::get('/articles', [AdminArticleController::class, 'index']);
    Route::post('/articles/store', [AdminArticleController::class, 'store']);
    Route::get('/articles/delete/{article}', [AdminArticleController::class, 'delete']);
    Route::post('/articles/update', [AdminArticleController::class, 'update']);
});
