<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// READ (index)
Route::get('/', [ProductController::class, 'index']);

// CREATE
Route::get('/insert', [ProductController::class, 'create']);
Route::post('/insert', [ProductController::class, 'store']);

// UPDATE
Route::get('/update', [ProductController::class, 'updated']);
Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::put('/updated/{id}', [ProductController::class, 'update']);

// DELETE
Route::delete('/delete', [ProductController::class, 'destroy']);

// Page statis
Route::get('/team', function () {
    return view('team', ['title' => 'TEAM']);
});