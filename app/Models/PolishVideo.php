<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolishVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'polish_text',
    ];

    public function translation()
    {
        return $this->hasOne(Translation::class, 'video_id');
    }
}
