<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrenchVideo;
use App\Models\FrenchTranslation;

class FrenchVideoController extends Controller
{
    public function index()
    {
        $videos = FrenchVideo::with('translation')->inRandomOrder()->get();
        return view('french-index', compact('videos'));
    }
    
    public function show($id)
    {
        // Récupérer la vidéo par son ID
        $video = FrenchVideo::find($id);
    
        // Vérifier si la vidéo existe
        if (!$video) {
            abort(404, 'Video not found');
        }

    
        // Récupérer la traduction de la vidéo si elle existe
        $translation = FrenchTranslation::where('video_id', $id)->first();
    
        // Passer la vidéo et la traduction (si elle existe) à la vue
        return view('french-video-page', compact('video', 'translation'));
    }
}
