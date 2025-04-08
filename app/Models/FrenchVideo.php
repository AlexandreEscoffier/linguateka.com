<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FrenchVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'french_text',
    ];

    public function translation()
    {
        return $this->hasOne(FrenchTranslation::class, 'video_id');
    }
}
