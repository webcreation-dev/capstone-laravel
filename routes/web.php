<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PpmController;

Route::get('/', [PpmController::class, 'index']);
Route::post('/ppms/save', [PpmController::class, 'save']);
Route::delete('/ppms/delete/{id}', [PpmController::class, 'delete']);

Route::get('/ppms/{id}', [PpmController::class, 'show'])->name('ppms.show');
Route::post('/ppm-lines/save', [PpmController::class, 'saveLine']);
Route::post('/ppm-lots/save', [PpmController::class, 'saveLot']);
Route::get('/ppm-lot-dates/{id}/details', [PpmController::class, 'getDateDetails']);
Route::post('/ppm-lot-dates/save', [PpmController::class, 'saveDate']);
Route::post('/ppm-lot-dates/{id}/comments', [PpmController::class, 'addComment']);
Route::post('/ppm-lot-dates/{id}/documents', [PpmController::class, 'uploadDocument']);
Route::put('/ppm-lot-date-comments/{id}', [PpmController::class, 'updateComment']);
Route::delete('/ppm-lot-date-comments/{id}', [PpmController::class, 'deleteComment']);

Route::get('/form', function () {
    return view('ppm-form');
});
