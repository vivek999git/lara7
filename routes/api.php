<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('list', [ContactController::class, 'list'])->name('form.list');
Route::get('add', [ContactController::class, 'add']);
Route::post('save', [ContactController::class, 'save'])->name('form.submit');