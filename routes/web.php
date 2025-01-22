<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("categories")->group(function () {
    Route::get("/", [CategoryController::class, "create"])->name("categories.create");
    Route::post("/", [CategoryController::class, "store"])->name("categories.store");
});