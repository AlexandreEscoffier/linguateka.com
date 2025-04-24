<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FrenchTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_name', //associe video grace au nom
        'english_translation',  // Traduction en anglais
        'polish_translation',  // Traduction en polonais
    ];


    // Relation avec le modèle Video (si tu l'as)
    public function video()
    {
        return $this->belongsTo(FrenchVideo::class, 'video_name', 'name');
    }
}
