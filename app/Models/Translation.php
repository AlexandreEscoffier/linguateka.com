<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_name',
        'english_translation',
        'french_translation',
    ];

    public function video()
    {
        return $this->belongsTo(PolishVideo::class, 'video_name', 'name');
    }
}
