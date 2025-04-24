<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PolishVideoController;
use App\Models\PolishVideo;
use App\Models\Translation;

use App\Http\Controllers\FrenchVideoController;
use App\Models\FrenchVideo;
use App\Models\FrenchTranslation;

// Page principale : vidéos polonaises
Route::get('/', [PolishVideoController::class, 'index'])->name('index');

// Page individuelle vidéo polonaise (mise à jour avec `name`)
Route::get('/polish-video/{name}', function ($name) {
    $video = PolishVideo::where('name', $name)->firstOrFail();
    $translation = Translation::where('video_name', $name)->first();
    return view('polish-video-page', compact('video', 'translation'));
});

// Page liste vidéos françaises
Route::get('/french', [FrenchVideoController::class, 'index'])->name('french.index');

// Page individuelle vidéo française
Route::get('/french-video/{name}', function ($name) {
    $video = FrenchVideo::where('name', $name)->firstOrFail();
    $translation = FrenchTranslation::where('video_name', $name)->first();
    return view('french-video-page', compact('video', 'translation'));
});

Route::get('/polish-expressions-road', function () {
    return view('polish-expressions-page');
})->name('polish-expressions-road');

Route::get('/polish-vocabulary-road', function () {
    return view('polish-vocabulary-page');
})->name('polish-vocabulary-road');

Route::get('/french-expressions-road', function () {
    return view('french-expressions-page');
})->name('french-expressions-road');

Route::get('/french-vocabulary-road', function () {
    return view('french-vocabulary-page');
})->name('french-vocabulary-road');

