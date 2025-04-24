<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FrenchVideo;

class FrenchVideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            [
                'name' => "cailloux",
                'display_name' => "cailloux",
                'link' => "https://www.instagram.com/reel/DFyAyS-oeJR/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "J'arrête d'essayer de discuter avec des L2 Sciences de la terre (L2 pour licence 2, donc les étudiants en deuxième année de licence de biologie)\n\n -B : Quand Bart pas occupé, Bart penser. Beaucoup.\n -G : À quoi, si je puis me permettre ?\n -B : Cailloux.\n -G : Cailloux ? \n -B : Cailloux passionnants.",
                'tags' => 'difficulty_easy, sub-titles',
            ],
            [
                'name' => "pas-avoir-saisi-sa-chance",
                'display_name' => "ne pas saisir sa chance",
                'link' => "https://www.instagram.com/reel/DEfOLA9NaKT/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "-A : Mais du coup toi tu fais quoi dans la vie ?\n -B : Rien, et toi ?\n -A : Euh bah, je je fais un peu de dessin hein, un peu...\n -B : Ah ouais activité de gamin en mode.\n -A : Ok, ouais du coup t'as peut etre des passions aussi toi ?\n -B : Ouais moi j'aime bien manger, j'aime bien rire, j'aime bien euh me lever, j'aime bien ouvrir la porte avec la clef après fermer la porte...",
                'tags' => 'difficulty_medium',
            ],
            [
                'name' => "va-dormir",
                'display_name' => "va dormir",
                'link' => "https://www.instagram.com/reel/DDX2NzcgiZA/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "Va dormir, Va dormir !\n Tu vois actuellement tu regardes cette vidéo dans cette position collée à ton oreiller.\n Bah tu devrais pas avoir ton téléphone là !\n Tu devrais dormir ok !\n Donc maintenant t'arrêtes tes conneries, tu me coupes ce téléphone et tu vas dormir !",
                'tags' => 'difficulty_easy, sub-titles',
            ],
            [
                'name' => "la-roue-tourne",
                'display_name' => "la roue tourne",
                'link' => "https://www.instagram.com/reel/DD620-eiGEJ/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "-A : Et comme on dit la roue elle tourne très fort t'inquiéte pas mon grand wallah radim la roue elle tourne.\n -B : Va niquer t'as mère toi et la roue.",
                'tags' => 'difficulty_easy, sub-titles, popular_meme',
            ],
            [
                'name' => "bolcheviques",
                'display_name' => "bolcheviques",
                'link' => "https://www.instagram.com/reel/DDz5RtsOudQ/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "Pov : quand tu veux écrire un message dans le groupe de classe mais que ça spam tellement que tu peux même pas en placer une\n\n-A : Oui enfin vous me laisser pas la parole quoi on se croirait chez les bolcheviques ici !",
                'tags' => 'difficulty_easy, popular_meme',
            ],
            [
                'name' => "elle-ment",
                'display_name' => "elle ment",
                'link' => "https://www.instagram.com/reel/DAHVGuns-Cd/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "POV : C'est le moment de débarrasser la table et comme par hasard ta sœur dit qu'elle doit aller aux toilettes.\n\n-A : Elle ment.\n-B : Donc elle vous a trahis ?\n-A : Ah oui ! Elle ment ! Vous comprenez ? Je dis moi que c'est le record du monde de la trahison.",
                'tags' => 'difficulty_easy, popular_meme',
            ],
            [
                'name' => "pmu",
                'display_name' => "pmu",
                'link' => "https://www.instagram.com/reel/DBg2LL3gcHW/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "pmu",
                'tags' => 'difficulty_hard, sub-titles',
            ],
            [
                'name' => "yugi-vs-cell",
                'display_name' => "yugi vs cell",
                'link' => "https://www.instagram.com/reel/DC9klejCaGu/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "yugi vs cell",
                'tags' => 'difficulty_medium, sub-titles',
            ],
            [
                'name' => "ca",
                'display_name' => "ca",
                'link' => "https://www.instagram.com/reel/C-243obBErp/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "Ça, IL Si un adulte était avec Géorgie.\n\n-A : Tu veux le récupérer ?\n-B : Qu'est qui ce passe là ? Ça va ? Vous êtes tomber ?\n-A : Ça va ça va non j'suis pas tombé j'suis j'suis posé là.\n-B : Si vous êtes pas tombé c'est bizarre.\n-A : Bah oui c'est vrai c'est bizarre c'est vrai que si j'étais tombé ça serait ça serait moins bizarre, j’suis posé au calme je m'abrite un peu parce qu'il pleut. Je me balade, en vrai je me balade.\n-B : Dans les égouts ?\n-A : Oui.\n-B : Habillé en clown ?\n-A : Bah oui bah ça fait quoi c'est bizarre d'être habillé en clown ?\n-B : Bah…\n-A : C'est vrai que maintenant je me suis entendu le dire c'est vrai que c'est un un peu bizarre mais bon ça ça se fait quoi.\n-B : Dans les égouts en plus.\n-A : Oui bon ben ça va, hein on est où là on est au tribunal des clown dans les égouts ? Pardon hein moi j'suis clown d'hôpital à la base, et euh, et voilà quoi je rentrais du boulot et euh et paf !(paf est une interjection pour exprimer la surprise)\n-B : Paf ?\n-A : Ouais… j'suis tomber quoi.\n-B : Mais je croyais que vous étiez pas tomber ?\n-A : Alors, je suis pas tomber j’ai glissé.\n-B : Ah ben faut appeler les secours alors.\n-A : Non non non, non.\n-B : Madame !\n-A : Non putain non.\n-C : Qu'est qui ce passe ?\n-B : Cet homme a glissé dans les égouts.\n-C : Un clown dans les égouts c'est hyper bizarre non ?\n-B : Ah ben je me suis dit pareil mais apparemment il est clown d'hôpital.\n-A : Oui oui c'est c'est…\n-C : Vous êtes clown d'hôpital ?\n-A : Oui c'est ça ouais.\n-C : Dans quel hôpital ?\n-A : Et j'ai j'ai pas un seul hôpital attitré j'en ai plusieurs.",
                'tags' => 'difficulty_hard, sub-titles',
            ],
            [
                'name' => "allo-mon-chou",
                'display_name' => "allo mon chou",
                'link' => "https://www.instagram.com/reel/C7hI-Kms3x5/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "allo mon chou",
                'tags' => 'difficulty_medium, sub-titles',
            ],
            [
                'name' => "le-coca-cest-degueulasse",
                'display_name' => "le coca c'est dégueulasse !",
                'link' => "https://www.instagram.com/reel/DHYvWbQpOdr/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "-A : Vous buvez de la merde et vous êtes fiers. Le coca c'est dégueulasse ! Faut pas boire ça, viens voir je te montre ce qu'il faut boire moi. Kopfertami. Ça va venir. Faut le mériter, son putain de jus de pomme. Voilà ! Jus de pommes fermier ça c'est magnifique on veut se faire plaisir avec une petite boisson sucrée, bah c'est pas le coca qui vous rend service. Ça c'est de la pomme 100% rien d'autre avec une petite injonction de gaz pour le plaisir.",
                'tags' => 'difficulty_medium, sub-titles',
            ],
        ];

        foreach ($videos as $video) {
            FrenchVideo::create($video);
        }
    }
}
