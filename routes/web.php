<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\News\NewsController;

Route::get('/', [NewsController::class, "index"])->name("news.index");

Route::prefix("news")->group(function () {
    Route::get("/", [NewsController::class, "create"])->name("news.create");
    Route::post("/", [NewsController::class, "store"])->name("news.store");
});

Route::prefix("categories")->group(function () {
    Route::get("/", [CategoryController::class, "create"])->name("categories.create");
    Route::post("/", [CategoryController::class, "store"])->name("categories.store");
});