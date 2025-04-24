<?php 

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrenchTranslationsSeeder extends Seeder
{

    public function run()
    {
        DB::table('french_translations')->insert([
            [
                'video_name' => "cailloux",
                'english_translation' => "stone",
                'polish_translation' => "kamien",
            ],
            [
                'video_name' => "pas-avoir-saisi-sa-chance",
                'english_translation' => "no chance",
                'polish_translation' => "-A : No więc, czym się zajmujesz w życiu?\n -B : Niczym, a ty?\n -A : Eee, no, trochę rysuję, tak trochę...\n -B : Aha, czyli takie dziecięce zajęcie.\n -A : Ok... No to może ty masz jakieś pasje?\n -B : Tak, lubię jeść, lubię się śmiać, lubię... wstawać, lubię otwierać drzwi kluczem, potem zamykać drzwi...",
            ],
            [
                'video_name' => "va-dormir",
                'english_translation' => "go sleep !",
                'polish_translation' => "idz spac !",
            ],
            [
                'video_name' => "la-roue-tourne",
                'english_translation' => "the wheel",
                'polish_translation' => "nie wiem",
            ],
            [
                'video_name' => "bolcheviques",
                'english_translation' => "bolcheviques",
                'polish_translation' => "bolcheviques",
            ],
            [
                'video_name' => "elle-ment",
                'english_translation' => "she lies",
                'polish_translation' => "ona klamie",
            ],
            [
                'video_name' => "pmu",
                'english_translation' => "pub",
                'polish_translation' => "browar",
            ],
            [
                'video_name' => "yugi-vs-cell",
                'english_translation' => "yugi vs cell",
                'polish_translation' => "yugi vs cell",
            ],
            [
                'video_name' => "ca",
                'english_translation' => "this",
                'polish_translation' => "ten",
            ],
            [
                'video_name' => "allo-mon-chou",
                'english_translation' => "hello my sweet",
                'polish_translation' => "kamien",
            ],
        ]);
    }
}
