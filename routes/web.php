<?php

use App\Http\Controllers\BackOffice\AdController;
use App\Http\Controllers\BackOffice\SectionController;
use App\Models\Ad;
use App\Models\Section;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    $sections = Section::where('is_visible', true)->orderBy('position')->get();
    $ads = Ad::where('is_active', true)->get();
    return view('frontoffice.home', compact('sections', 'ads'));
});


Route::get('/section/{slug}', function ($slug) {
    $section = Section::where('slug', $slug)->firstOrFail();
    $ads = Ad::where('is_active', true)->get();
    return view('frontoffice.section', compact('section', 'ads'));
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


    Route::get('/ads', [AdController::class, 'index']);
    Route::get('/ads/create', [AdController::class, 'create']);
    Route::post('/ads', [AdController::class, 'store']);
    Route::get('/ads/{id}/edit', [AdController::class, 'edit']);
    Route::post('/ads/{id}', [AdController::class, 'update']);
    Route::post('/ads/{id}/delete', [AdController::class, 'destroy']);
    Route::post('/ads/{id}/toggle', [AdController::class, 'toggle']);
});
