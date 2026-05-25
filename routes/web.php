<?php

use App\Http\Controllers\BackOffice\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
    Route::get('/sections', [SectionController::class, 'index']);
    Route::get('/sections/create', [SectionController::class, 'create']);
    Route::post('/sections', [SectionController::class, 'store']);
    Route::get('/sections/{id}/edit', [SectionController::class, 'edit']);
    Route::post('/sections/{id}', [SectionController::class, 'update']);
    Route::post('/sections/{id}/delete', [SectionController::class, 'destroy']);
    Route::post('/sections/{id}/toggle', [SectionController::class, 'toggle']);
    Route::post('/sections/{id}/move', [SectionController::class, 'move']);
});
