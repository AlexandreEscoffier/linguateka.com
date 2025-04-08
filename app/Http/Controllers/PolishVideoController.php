<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolishVideo;
use App\Models\Translation;

class PolishVideoController extends Controller
{
    public function index()
    {
        $videos = PolishVideo::with('translation')->inRandomOrder()->get();
        return view('index', compact('videos'));
    }
    
    public function show($id)
    {
        // Récupérer la vidéo par son ID
        $video = PolishVideo::find($id);
    
        // Vérifier si la vidéo existe
        if (!$video) {
            abort(404, 'Video not found');
        }

    
        // Récupérer la traduction de la vidéo si elle existe
        $translation = Translation::where('video_id', $id)->first();
    
        // Passer la vidéo et la traduction (si elle existe) à la vue
        return view('polish-video-page', compact('video', 'translation'));
    }
    
}
