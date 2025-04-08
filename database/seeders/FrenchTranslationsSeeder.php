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
                'video_id' => 1,
                'english_translation' => "stone",
                'polish_translation' => "kamien",
            ],
            [
                'video_id' => 2,
                'english_translation' => "cauchemar in cuisine",
                'polish_translation' => "-A : Zamówiłem antrykot. Wyraźnie powiedziałem jej, jak ma być wysmażony, więc lepiej, żeby mi go nie spaliła.\n -B : Przepraszam.\n -A : Chyba żartujesz?\n -B : Przepraszam za beknięcie.\n -A : Kurwa, to jakiś żart! Hector, do nogi!\n -C : Czasem się zastanawiam, czy ona to robi specjalnie, czy po prostu jest głupia. A potem od razu dostaję odpowiedź.\n -A : Hector... Zamówiłem antrykot krwisty. To jakiś żart?\n -C : Nie, ona po prostu jest głupia.\n -A : Mam już dość! Idę do kuchni!\n -C : O cholera, odpaliliśmy bombę, co myśmy narobili?!\n -A : Mam 45 restauracji i nigdy czegoś takiego nie widziałem.\n -A : Antrykot krwisty nie znaczy antrykot pokolorowany na niebiesko! A te tarte marchewki w tym pudełku? To nie jest świeże! W menu piszecie, że jest świeże, ale to kłamstwo!\n -D : Oczywiście, że były świeże, były w zamrażarce.\n -A : Zamrożone nie znaczy świeże!\n -D : Ale przecież były zimne.\n -A : Kurwa, ona nic nie rozumie! Termostat w zamrażarce działa, czy co?!\n -A : O ja pierdolę, ale tu śmierdzi! Wasza lodówka jest zepsuta, czy co?\n -A : Właściwie to nie jest zepsuta, po prostu jest odłączona!\n -D : O cholera, faktycznie!\n -A : I zamiast niej wstawiliście jakąś tandetną lampę?!\n -D : Eee… Tandetna?! To rodzinne dziedzictwo, warte 8000 euro\n. -A : Ja cię nauczę, jak się gotuje mięso! Co tu się odpierdala, w kuchni leży zdechły ptak!\n -D : Znowu?!\n -A : Jak to „znowu”?!\n -D : Jedzenie zawsze ląduje na podłodze.\n -A : Jedzenie?! Kurwa, czy wy mnie karmiliście zdechłym gołębiem?!\n -D : Tu na pewno jest jakiś duch, bo…\n -D : Hector to cudowny szef, on znajduje problemy na każde rozwiązanie.",
            ],
            [
                'video_id' => 3,
                'english_translation' => "no chance",
                'polish_translation' => "-A : No więc, czym się zajmujesz w życiu?\n -B : Niczym, a ty?\n -A : Eee, no, trochę rysuję, tak trochę...\n -B : Aha, czyli takie dziecięce zajęcie.\n -A : Ok... No to może ty masz jakieś pasje?\n -B : Tak, lubię jeść, lubię się śmiać, lubię... wstawać, lubię otwierać drzwi kluczem, potem zamykać drzwi...",
            ],
            [
                'video_id' => 4,
                'english_translation' => "go sleep !",
                'polish_translation' => "idz spac !",
            ],
            [
                'video_id' => 5,
                'english_translation' => "the wheel",
                'polish_translation' => "nie wiem",
            ],
            [
                'video_id' => 6,
                'english_translation' => "bolcheviques",
                'polish_translation' => "bolcheviques",
            ],
            [
                'video_id' => 7,
                'english_translation' => "she lies",
                'polish_translation' => "ona klamie",
            ],
            [
                'video_id' => 8,
                'english_translation' => "pub",
                'polish_translation' => "browar",
            ],
            [
                'video_id' => 9,
                'english_translation' => "yugi vs cell",
                'polish_translation' => "yugi vs cell",
            ],
            [
                'video_id' => 10,
                'english_translation' => "this",
                'polish_translation' => "ten",
            ],
            [
                'video_id' => 11,
                'english_translation' => "hello my sweet",
                'polish_translation' => "kamien",
            ],
        ]);
    }
}
