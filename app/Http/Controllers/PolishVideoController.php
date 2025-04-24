<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolishVideo;
use App\Models\Translation;
use App\Models\SpecialWord;

class PolishVideoController extends Controller
{
    public function index(Request $request)
    {
        // Filtres
        $difficulty = $request->input('difficulty');
        $has_subtitles = $request->input('subtitles') == '1';
        $popular_meme = $request->input('popular_meme') == '1';
        $search = $request->input('search', '');

        // Récupération des vidéos
        $videos = PolishVideo::with('translation')
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
                    $query->where('polish_text', 'like', '%' . $search . '%')
                          ->orWhere('tags', 'like', '%' . $search . '%')
                          ->orWhereHas('translation', function($q) use ($search) {
                              $q->where('english_translation', 'like', '%' . $search . '%')
                                ->orWhere('french_translation', 'like', '%' . $search . '%');
                          });
                });
            })
            ->inRandomOrder()
            ->get();

        return view('index', compact('videos'));
    }

    public function show($name)
    {
        $video = PolishVideo::where('name', $name)->firstOrFail();
        $translation = Translation::where('video_name', $name)->first();
    
        return view('polish-video-page', compact('video', 'translation'));
    }
    
}