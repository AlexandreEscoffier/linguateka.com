<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PolishVideoController;
use App\Models\PolishVideo;
use App\Models\Translation;

use App\Http\Controllers\FrenchVideoController;
use App\Models\FrenchVideo;
use App\Models\FrenchTranslation;

// Page principale : vidéos polonaises
Route::get('/', [PolishVideoController::class, 'index']);

// Page individuelle vidéo polonaise
Route::get('/polish-video/{id}', function ($id) {
    $video = PolishVideo::findOrFail($id);
    $translation = Translation::where('video_id', $id)->first();
    return view('polish-video-page', compact('video', 'translation'));
});

// Page liste vidéos françaises
Route::get('/french', [FrenchVideoController::class, 'index'])->name('french.index');

// Page individuelle vidéo française
Route::get('/french-video/{id}', function ($id) {
    $video = FrenchVideo::findOrFail($id);
    $translation = FrenchTranslation::where('video_id', $id)->first();
    return view('french-video-page', compact('video', 'translation'));
});