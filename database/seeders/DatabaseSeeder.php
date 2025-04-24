<?php

namespace Database\Seeders;

use App\Models\SpecialWord;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Appelle les seeders des vidéos et des mots spéciaux
        $this->call([
            PolishVideosSeeder::class,
            TranslationsSeeder::class,
            FrenchVideosSeeder::class,
            FrenchTranslationsSeeder::class,
        ]);
    }
}
