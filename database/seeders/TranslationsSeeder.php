<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationsSeeder extends Seeder
{
    public function run()
    {
        // Insérer les traductions directement dans la table translations
        DB::table('translations')->insert([
            [
                'video_id' => 1,
                'english_translation' => "-A : I'll show you bajojajo, \n -B : You fucking bamboo, fucked up the ass. It's the weekend, for fuck's sake, shut your mouth.",
                'french_translation' => "-A : Bajojajo, bajojajo !\n -B : Je te donnerai, putain de bambou, baisé dans le cul. C'est le putain de week-end, ferme ta putain de gueule.",
            ],
            [
                'video_id' => 2,
                'english_translation' => "A donut with icing and a donut with powder\n\n A donut with icing and a donut with powder are, the whores, loudly arguing in a box. They are arguing about which is better. I fucked both of them up and the arguments went away.",
                'french_translation' => "Un pączek glacé et un pączek poudré\n\n Un pączek glacé et un pączek poudré se disputent bruyamment dans la boîte. Ils se disputent pour savoir lequel est le meilleur. Je les ai bouffés tous les deux et les disputes ont cessé.",
            ],
            [
                'video_id' => 3,
                'english_translation' => "Classics of the Polish Internet \n\n -A : I'm good. Am I good? Karol Okrasa, as usual, in the heart of the action. My dears, here today… \n -B : Get the fuck out of my field! \n -A -Sir, we're from TV! ... Excuse me?! Why are you throwing? Sir! But we're from TV! Fuck, no!",
                'french_translation' => "Les classiques de l'internet polonais\n\n -A : Je suis bien. Je suis bien ? Karol Okrasa, comme d'habitude, au cœur des événements. Mes chers (télespectateurs), voici aujourd'hui... \n -B : Casse-toi de mon champ ! \n -A : -Monsieur, nous sommes de la télévision ! ... Excusez moi ?! Pourquoi vous jetez ? S'il vous plaît, monsieur ! Mais nous venons de la télévision ! Putain !",
            ],
            [
                'video_id' => 4,
                'english_translation' => "Ticket control / Sometimes it's not worth the hassle\n\n -A : Good morning, ticket inspection, please prepare tickets for inspection. Thank you. Thank you. Tickets for inspection, please \n -B I don't have any. \n -A : Ee, that'll be a fine. \n -B :Hy, no, shove that ticket up your ass. \n -A : If you talk to me like that again, I'll fucking punch you, do you understand ? \n -B : Uh, a monthly pass, please . \n -A : -Well, that's better now, hehe. The municipal transport company wishes you a safe and sound journey.",
                'french_translation' => "Contrôle des billets / Parfois, le jeu n'en vaut pas la chandelle\n\n -A : Bonjour, contrôle des billets, veuillez préparer vos billets pour le contrôle. Merci. Merci. Billets pour inspection, s'il vous plaît. \n -B : J'en ai pas. \n -A : Eh, ce sera une amende. \n -B : Eh bien, non, mets cette amende dans ton cul. \n -A : Si tu me parles encore comme ça, je te casse la gueule, compris ? \n -B : Euh, alors, un (forfait) mensuel, s'il vous plaît. \n -A : Eh bien, c'est mieux maintenant, hehe. La société de transport municipale vous souhaite un voyage serein et sûr.",
            ],
            [
                'video_id' => 5,
                'english_translation' => "Bandit goat escaped from prison\n\n A goat, bandit, escaped from prison, he wanted to taste life in freedom. He's enjoying the snow and having a good time... Oh fuck! The guys in blue! They're already after him.",
                'french_translation' => "Une chèvre bandit s'est échappée de prison\n\n Un bouc bandit s'est échappé de prison, il voulait goûter à la vie en liberté. Profiter de la neige et s'amuser... Oh putain ! Ce sont des poulets (bâtons) ! Ils le suivent déjà.",
            ],
            [
                'video_id' => 6,
                'english_translation' => "Classics of the Polish Internet \n\n -U : Hi, my name is Urszula, and you?\n -O : Oksana.\n -U : Oksana, it's great to meet you, could you tell us what your interests are?\n -O : I mean, generally, my interests are, my interests would be: partys, boys and generally things like that, but science is what excites me the most and I have hope for the future.\n -U : Oksana, I have one question for you. Are you in favor of freeing garden gnomes?\n -O : I mean, sure, yes.\n -U : Are you in favor of freeing them? And are you able to simulate a gnome dancing for us?\n -O : Not really.\n -U : And your dancing?\n -O: Not either.\n -U : Oksana, there's a party, at least with your hands.",
                'french_translation' => "Les classiques de l'internet polonais\n\n -U : Salut, je m'appelle Urszula, et toi ?\n -O : Oksana.\n -U : Oksana, ravie de te rencontrer, peux-tu nous dire quels sont tes centres d'intérêt ?\n -O : Eh bien, en général, mes intérêts sont, mes intérêts seraient : les discothèques, les garçons et généralement des choses comme ça, mais en ce qui me concerne, ce qui me passionne le plus, c'est d'étudier et j'ai généralement de l'espoir pour l'avenir.\n -U : Oksana, j'ai une question pour toi. Êtes-vous favorable à la libération des nains de jardin ?\n -O : Je veux dire, bien sûr, ouais.\n -U : Êtes-vous pour la libération ? Peux-tu simuler une danse de nain pour nous ?\n -O : Pas vraiment.\n -U : Et ta danse ?\n -O : Non plus.\n -U : Oksana, c'est une soirée, (bouges) au moins avec les mains.",
            ],
            [
                'video_id' => 7,
                'english_translation' => "Me to my bro when I run out of arguments, but I keep on arguing to piss him off\n\n Very interesting argument, but I'm afraid that your old (mother)...",
                'french_translation' => "Moi à mon pote quand je suis à court d'arguments, mais je continue à argumenter pour l'énerver\n\n Argument très intéressant, mais j'ai peur que ta vieille...",
            ],
            [
                'video_id' => 8,
                'english_translation' => "Good night, it's time for bed\n\n Good night, it's time for bed, what time do you stay up, normal people sleep, they don't shine like idiots, it's already late, check the clock, he run rumpart, our night, fucking owl.",
                'french_translation' => "Bonne nuit, il est l'heure d'aller au lit\n\n Bonne nuit, il est l'heure d'aller au lit, à quelle heure restes-tu debout, les gens normals dorment, ils ne brillent pas comme des idiots, il est déjà tard, regarde l'horloge, il se pavane, notre, putain, couche-tard.",
            ],
            [
                'video_id' => 9,
                'english_translation' => "Pov: Your old (your father) bought fireworks for 69zł. His expectations:\n\n The beginning. The moment of birth of time and space. The primordial phenomenon from which the universe as we know it emerged.",
                'french_translation' => "Pov : Ton vieux a acheté des feux d'artifice pour 69zł. Ses attentes :\n\n Le commencement. Le moment de la naissance du temps et de l'espace. Le phénomène primordial à partir duquel l'univers tel que nous le connaissons a émergé.",
            ],
            [
                'video_id' => 10,
                'english_translation' => "Every time I see myself in the mirror.\n\n Japierdolylyly, I'm so fucking",
                'french_translation' => "Chaque fois que je me vois dans le miroir.\n\n Japierdolylyly, je suis génial",
            ],
            [
                'video_id' => 11,
                'english_translation' => "Me at my in-laws' today on Christmas Eve \n\n -M : What can I help you with, maybe a dumpling?\n -G : Hmm, that's good.",
                'french_translation' => "Moi chez mes beaux-parents aujourd'hui pour le réveillon de Noël \n\n -M : En quoi puis-je t'aider, peut-être un ravioli ?\n -G : Hmm, c'est bon.",
            ],
            [
                'video_id' => 12,
                'english_translation' => "ING bank employee when she spots me in the gallery:\n\n Don't be afraid, don't be scared, I'm a friend, I won't hurt you, come here, come to me, sit next to me, look into my eyes, you see me, I see you too, let's look at each other until our eyes get tired. Don't you want? Why? Is something wrong?",
                'french_translation' => "Employé de la banque ING lorsqu'il m'aperçoit dans la galerie :\n\n N'aie pas peur, n'aie pas peur, je suis un ami, je ne te ferai pas de mal, viens ici, viens à moi, assieds-toi à côté de moi, regarde-moi dans les yeux, tu me vois, je te vois aussi, regardons-nous jusqu'à ce que nos yeux se fatiguent. Tu ne veux pas ? Pourquoi? Quelque chose ne va pas ?",
            ],
        ]);
    }
}
