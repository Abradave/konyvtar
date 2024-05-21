<?php

use App\Http\Controllers\API\BookController as APIBookController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::apiResource("/books", APIBookController::class);
Route::post("/books/{id}/rent", [APIBookController::class, "rent"]);
