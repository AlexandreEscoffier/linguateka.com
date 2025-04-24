<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrenchVideo;
use App\Models\FrenchTranslation;

class FrenchVideoController extends Controller
{
    public function index(Request $request)
    {
        // Filtres
        $difficulty = $request->input('difficulty');
        $has_subtitles = $request->input('subtitles') == '1';
        $popular_meme = $request->input('popular_meme') == '1';
        $search = $request->input('search', '');

        // Récupération des vidéos
        $videos = FrenchVideo::with('translation')
            ->when($difficulty, function($query, $difficulty) {
                return $query->where('tags', 'like', '%difficulty_' . $difficulty . '%');
            })
            ->when($has_subtitles, function($query) {
                return $query->where('tags', 'like', '%sub-titles%');
            })
            ->when($popular_meme, function($query) {
                return $query->where('tags', 'like', '%popular_meme%');
            })
            
            ->when($search, function($query, $search) {
                return $query->where(function($query) use ($search) {
                    $query->where('french_text', 'like', '%' . $search . '%')
                          ->orWhere('tags', 'like', '%' . $search . '%')
                          ->orWhereHas('translation', function($q) use ($search) {
                              $q->where('english_translation', 'like', '%' . $search . '%')
                                ->orWhere('polish_translation', 'like', '%' . $search . '%');
                          });
                });
            })
            ->inRandomOrder()
            ->get();

        return view('french-index', compact('videos'));
    }

    public function show($name)
    {
        $video = FrenchVideo::with('translation')->where('name', $name)->firstOrFail();
        $translation = $video->translation;
        $specialWords = $video->specialWords;
    
        return view('french-video-page', compact('video', 'translation',));
    }
    
}