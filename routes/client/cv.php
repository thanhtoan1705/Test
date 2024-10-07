<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\CV\CvTemplateController;


Route::get('/cv/{cvTemplate}', [CvTemplateController::class, 'preview'])->name('cv.preview');
Route::get('/cv/{cvTemplate}/edit', [CvTemplateController::class, 'edit'])->name('cv.edit');
Route::post('/cv/{cvTemplate}', [CvTemplateController::class, 'update'])->name('cv.update');
Route::get('/cv/{cvTemplate}/download', [CvTemplateController::class, 'download'])->name('cv.download');

