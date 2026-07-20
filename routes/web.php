<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PpmController;

Route::get('/', [PpmController::class, 'index']);
Route::post('/ppms/save', [PpmController::class, 'save']);
Route::delete('/ppms/delete/{id}', [PpmController::class, 'delete']);

Route::get('/ppms/{id}', [PpmController::class, 'show'])->name('ppms.show');
Route::post('/ppm-lines/save', [PpmController::class, 'saveLine']);
Route::post('/ppm-lots/save', [PpmController::class, 'saveLot']);

Route::get('/form', function () {
    return view('ppm-form');
});
