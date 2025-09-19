<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\KategoriController;

Route::get('/', [SuratController::class, 'index'])->name('surat.index');
Route::get('/surat/create', [SuratController::class, 'create'])->name('surat.create');
Route::post('/surat', [SuratController::class, 'store'])->name('surat.store');
Route::get('/surat/{id}', [SuratController::class, 'show'])->name('surat.show');
Route::get('/surat/{id}/download', [SuratController::class, 'download'])->name('surat.download');
Route::delete('/surat/{id}', [SuratController::class, 'destroy'])->name('surat.destroy');

Route::resource('categories', KategoriController::class);

Route::view('/about', 'about')->name('about');