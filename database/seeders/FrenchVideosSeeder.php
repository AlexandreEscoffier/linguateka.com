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
            ],
            [
                'name' => "cauchemar-en-cuisine",
                'display_name' => "cauchemar en cuisine",
                'link' => "https://www.instagram.com/reel/DEw65h-tgcX/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "- A : J'ai commandé une entrecôte. Je lui ai bien spécifié la cuisson que je voulais, donc elle a pas intérêt à me la faire cramer.\n -B : Pardon.\n -A : C'est pas vrai ?\n -B : Pardon pour le rot.\n -A : Putain mais c'est une blague ! Hector au pied !\n -C : Parfois je me demande si elle le fait exprès ou si elle est juste conne. Puis après du coup j'ai la réponse.\n -A : Hector... j'ai demandé une entrecôte bleue. C'est une blague ?\n -C : Non c'est une conne.\n -A : C'est bon, j'en ai ma claque ! Je fonce en cuisine !\n -C : Oh putain la bombe, qu'est qu'on a fait on a allumé une bombe !\n -A : J'ai 45 restaurants j'ai jamais vu ça.\n -A : Entrecôte bleue ça veut pas dire entrecôte colorier en bleue ! Et les carottes râpées dans la boite-là ! C'est pas frais ! Vous dites que c'est frais sur la carte mais c'est faux !\n -D : Bien sûr que si elles étaient fraiches elles étaient au congélo.\n -A : Mais congeler ça veut pas dire frais !\n -D : Bah pourtant c'était froid.\n -A : Putain mais elle comprend rien ! Il est au ton congel là ?!\n -A : Ah mais putain ça pue ! Il est pété votre frigo ou quoi ?\n -A : Il est pas pété en fait, il est juste débranché !\n -D : Oh la la bah ouais merde !\n -A : Et vous avez mis une lampe toute pourrie a la place ?\n -D :  Euh toute pourrie c'est un héritage de la famille ça vaut 8000 balles.\n -A : Je vais t'apprendre à cuisiner de la viande moi ! C'est quoi ce délire là il y a un piaf crevé dans la cuisine.\n -D : Encore !\n -A : Comment ça encore ?\n -D : La bouffe elle se retrouve toujours par terre.\n -A : La bouffe ?! Putain mais vous m'avez fait bouffer du pigeon crevé ?!\n -D : Il y a forcément un fantôme quelque part par ce que...\n -D : Hector c'est un patron d'amour hein, il trouve des problèmes a chaque solutions.",
            ],
            [
                'name' => "pas-avoir-saisi-sa-chance",
                'display_name' => "ne pas saisir sa chance",
                'link' => "https://www.instagram.com/reel/DEfOLA9NaKT/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "-A : Mais du coup toi tu fais quoi dans la vie ?\n -B : Rien, et toi ?\n -A : Euh bah, je je fais un peu de dessin hein, un peu...\n -B : Ah ouais activité de gamin en mode.\n -A : Ok, ouais du coup t'as peut etre des passions aussi toi ?\n -B : Ouais moi j'aime bien manger, j'aime bien rire, j'aime bien euh me lever, j'aime bien ouvrir la porte avec la clef après fermer la porte...",
            ],
            [
                'name' => "va-dormir",
                'display_name' => "va dormir",
                'link' => "https://www.instagram.com/reel/DDX2NzcgiZA/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "Va dormir, Va dormir !\n Tu vois actuellement tu regardes cette vidéo dans cette position collée à ton oreiller.\n Bah tu devrais pas avoir ton téléphone là !\n Tu devrais dormir ok !\n Donc maintenant t'arrêtes tes conneries, tu me coupes ce téléphone et tu vas dormir !",
            ],
            [
                'name' => "la-roue-tourne",
                'display_name' => "la roue tourne",
                'link' => "https://www.instagram.com/reel/DD620-eiGEJ/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "-A : Et comme on dit la roue elle tourne très fort t'inquiéte pas mon grand wallah radim la roue elle tourne.\n -B : Va niquer t'as mère toi et la roue.",
            ],
            [
                'name' => "bolcheviques",
                'display_name' => "bolcheviques",
                'link' => "https://www.instagram.com/reel/DDz5RtsOudQ/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "Pov : quand tu veux écrire un message dans le groupe de classe mais que ça spam tellement que tu peux même pas en placer une\n\n-A : Oui enfin vous me laisser pas la parole quoi on se croirait chez les bolcheviques ici !",
            ],
            [
                'name' => "elle-ment",
                'display_name' => "elle ment",
                'link' => "https://www.instagram.com/reel/DAHVGuns-Cd/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "POV : C'est le moment de débarrasser la table et comme par hasard ta sœur dit qu'elle doit aller aux toilettes.\n\n-A : Elle ment.\n-B : Donc elle vous a trahis ?\n-A : Ah oui ! Elle ment ! Vous comprenez ? Je dis moi que c'est le record du monde de la trahison.",
            ],
            [
                'name' => "pmu",
                'display_name' => "pmu",
                'link' => "https://www.instagram.com/reel/DBg2LL3gcHW/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "pmu",
            ],
            [
                'name' => "yugi-vs-cell",
                'display_name' => "yugi vs cell",
                'link' => "https://www.instagram.com/reel/DC9klejCaGu/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "yugi vs cell",
            ],
            [
                'name' => "ca",
                'display_name' => "ca",
                'link' => "https://www.instagram.com/reel/C-243obBErp/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "Ça, IL Si un adulte était avec Géorgie.\n\n-A : Tu veux le récupérer ?\n-B : Qu'est qui ce passe là ? Ça va ? Vous êtes tomber ?\n-A : Ça va ça va non j'suis pas tombé j'suis j'suis posé là.\n-B : Si vous êtes pas tombé c'est bizarre.\n-A : Bah oui c'est vrai c'est bizarre c'est vrai que si j'étais tombé ça serait ça serait moins bizarre, j’suis posé au calme je m'abrite un peu parce qu'il pleut. Je me balade, en vrai je me balade.\n-B : Dans les égouts ?\n-A : Oui.\n-B : Habillé en clown ?\n-A : Bah oui bah ça fait quoi c'est bizarre d'être habillé en clown ?\n-B : Bah…\n-A : C'est vrai que maintenant je me suis entendu le dire c'est vrai que c'est un un peu bizarre mais bon ça ça se fait quoi.\n-B : Dans les égouts en plus.\n-A : Oui bon ben ça va, hein on est où là on est au tribunal des clown dans les égouts ? Pardon hein moi j'suis clown d'hôpital à la base, et euh, et voilà quoi je rentrais du boulot et euh et paf (paf est une interjection pour exprimer la surprise) !\n-B : Paf ?\n-A : Ouais… j'suis tomber quoi.\n-B : Mais je croyais que vous étiez pas tomber ?\n-A : Alors, je suis pas tomber j’ai glissé.\n-B : Ah ben faut appeler les secours alors.\n-A : Non non non, non.\n-B : Madame !\n-A : Non putain non.\n-C : Qu'est qui ce passe ?\n-B : Cet homme a glissé dans les égouts.\n-C : Un clown dans les égouts c'est hyper bizarre non ?\n-B : Ah ben je me suis dit pareil mais apparemment il est clown d'hôpital.\n-A : Oui oui c'est c'est…\n-C : Vous êtes clown d'hôpital ?\n-A : Oui c'est ça ouais.\n-C : Dans quel hôpital ?\n-A : Et j'ai j'ai pas un seul hôpital attitré j'en ai plusieurs.",
            ],
            [
                'name' => "allo-mon-chou",
                'display_name' => "allo mon chou",
                'link' => "https://www.instagram.com/reel/C7hI-Kms3x5/?utm_source=ig_embed&amp;utm_campaign=loading",
                'french_text' => "allo mon chou",
            ],
        ];

        foreach ($videos as $video) {
            FrenchVideo::create($video);
        }
    }
}
