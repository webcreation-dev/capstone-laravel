<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PpmController;

Route::get('/', [PpmController::class, 'index']);
Route::post('/ppms/save', [PpmController::class, 'save']);
Route::delete('/ppms/delete/{id}', [PpmController::class, 'delete']);

Route::get('/ppms/{id}', [PpmController::class, 'show'])->name('ppms.show');
Route::post('/ppm-lines/save', [PpmController::class, 'saveLine']);
Route::post('/ppm-lots/save', [PpmController::class, 'saveLot']);
Route::post('/ppm-line-dates/save', [PpmController::class, 'saveDate']);
Route::get('/ppm-line-dates/{id}/details', [PpmController::class, 'getDateDetails']);
Route::post('/ppm-line-dates/{id}/comments', [PpmController::class, 'addComment']);
Route::post('/ppm-line-dates/{id}/documents', [PpmController::class, 'uploadDocument']);
Route::delete('/ppm-line-dates/documents/{id}', [PpmController::class, 'deleteDocument']);
Route::put('/ppm-line-date-comments/{id}', [PpmController::class, 'updateComment']);
Route::delete('/ppm-line-date-comments/{id}', [PpmController::class, 'deleteComment']);

Route::get('/form', function () {
    return view('ppm-form');
});
