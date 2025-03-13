document.addEventListener("DOMContentLoaded", function () {
    // Récupérer l'ID de la vidéo depuis l'URL
    const urlParams = new URLSearchParams(window.location.search);
    const videoId = urlParams.get("id");

    if (videoId !== null) {
        // Charger le fichier contenant les vidéos
        const videos = [
            { 
                id: 0,
                name: "bajojajo",
                link: "https://www.instagram.com/reel/DDpxifIoefH/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "-A : Bajojajo, bajojajo!\n -B : Ja ci dam bajojajo, pierdolony bambusie w dupe zajebany. Jest, do kurwy nędzy, weekend, zamknij tę mordę.",
                englishTranslation: "-A : I'll show you bajojajo, \n -B : You fucking bamboo, fucked up the ass. It's the weekend, for fuck's sake, shut your mouth.",
                frenchTranslation: "-A : Bajojajo, bajojajo !\n -B : Je te donnerai, putain de bambou, baisé dans le cul. C'est le putain de week-end, ferme ta putain de gueule."
            },
            { 
                id: 1,
                name: "paczek",
                link: "https://www.instagram.com/reel/DBJTfadgHuF/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Pączuszek z lukrem / Pączuszek z pudrem \n\n Pączuszek z lukrem i pączuszek z pudrem głośno się kurwy sprzeczają w pudle. Kłócą się o to, który jest lepszy. Wpierdoliłem oba i spory odeszły",
                englishTranslation: "A donut with icing and a donut with powder\n\n A donut with icing and a donut with powder are, the whores, loudly arguing in a box. They are arguing about which is better. I fucked both of them up and the arguments went away.",
                frenchTranslation: "Un pączek glacé et un pączek poudré\n\n Un pączek glacé et un pączek poudré se disputent bruyamment dans la boîte. Ils se disputent pour savoir lequel est le meilleur. Je les ai bouffés tous les deux et les disputes ont cessé."
            },
            { 
                id: 2,
                name: "mojego-pola",
                link: "https://www.instagram.com/reel/DDStZAqKO6V/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Klasyki polskiego internetu\n\n -A :Jestem dobry. Jestem dobry? Karol Okrasa jak zwykle w samym sercu wydarzeń. Moi drodzy, oto dziś... \n -B : Wypierdalać z mojego pola! \n -A : -Proszę pana, my z telewizji jesteśmy! ... Przepraszam?! Czemu pan rzuca? Proszę pana! Ale my z telewizji! Kurwa, no !",
                englishTranslation: "Classics of the Polish Internet \n\n -A : I'm good. Am I good? Karol Okrasa, as usual, in the heart of the action. My dears, here today… \n -B : Get the fuck out of my field! \n -A -Sir, we're from TV! ... Excuse me?! Why are you throwing? Sir! But we're from TV! Fuck, no! ",
                frenchTranslation: "Les classiques de l'internet polonais\n\n -A : Je suis bien. Je suis bien ? Karol Okrasa, comme d'habitude, au cœur des événements. Mes chers (télespectateurs), voici aujourd'hui... \n -B : Casse-toi de mon champ ! \n -A : -Monsieur, nous sommes de la télévision ! ... Excusez moi ?! Pourquoi vous jetez ? S'il vous plaît, monsieur ! Mais nous venons de la télévision ! Putain !"
            },
            { 
                id: 3,
                name: "bileciki-do-kontroli",
                link: "https://www.instagram.com/reel/DDUgEUcIkQs/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Bileciki do kontroli / Czasem nie warto pajacować\n\n -A : Dzień dobry, kontrola biletów, proszę przygotować bilety do kontroli. Dziękuję. Dziękuję. Bileciki do kontroli, proszę. \n -B : Nie mam \n -A : Ee to będzie mandat. \n -B : Hy, nie no, w dupę se wsadź ten mandat \n -A : Jeszcze raz się tak, kurwa, do mnie odezwiesz, to ci odjebię, rozmumiesz? \n -B : Yy, tt, to ja miesięczny, poproszę \n -A : No, od razu lepiej, hehe. Miejskie przedsiębiorstwo komunikacyjne życzy spokojnej i bezpiecznej podróży.",
                englishTranslation: "Ticket control / Sometimes it's not worth the hassle\n\n -A : Good morning, ticket inspection, please prepare tickets for inspection. Thank you. Thank you. Tickets for inspection, please \n -B I don't have any. \n -A : Ee, that'll be a fine. \n -B :Hy, no, shove that ticket up your ass. \n -A : If you talk to me like that again, I'll fucking punch you, do you understand ? \n -B : Uh, a monthly pass, please . \n -A : -Well, that's better now, hehe. The municipal transport company wishes you a safe and sound journey.",
                frenchTranslation: " Contrôle des billets / Parfois, le jeu n'en vaut pas la chandelle\n\n -A : Bonjour, contrôle des billets, veuillez préparer vos billets pour le contrôle. Merci. Merci. Billets pour inspection, s'il vous plaît. \n -B : J'en ai pas. \n -A : Eh, ce sera une amende. \n -B : Eh bien, non, mets cette amende dans ton cul. \n -A : Si tu me parles encore comme ça, je te casse la gueule, compris ? \n -B : Euh, alors, un (forfait) mensuel, s'il vous plaît. \n -A : Eh bien, c'est mieux maintenant, hehe. La société de transport municipale vous souhaite un voyage serein et sûr."
            },
            { 
                id: 4,
                name: "koziol",
                link: "https://www.instagram.com/reel/DEm2n7bPioi/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Uciekł z więzienia kozioł bandyta\n\n Uciekł z więzienia kozioł bandyta, chciał na wolności posmakować życia. Cieszy się śniegiem i dobrą zabawą... O kurwa! To pały! Już za nim jadą.",
                englishTranslation: "Bandit goat escaped from prison\n\n A goat, bandit, escaped from prison, he wanted to taste life in freedom. He's enjoying the snow and having a good time... Oh fuck! The guys in blue! They're already after him.",
                frenchTranslation: "Une chèvre bandit s'est échappée de prison\n\n Un bouc bandit s'est échappé de prison, il voulait goûter à la vie en liberté. Profiter de la neige et s'amuser... Oh putain ! Ce sont des poulets (bâtons) ! Ils le suivent déjà."
            },
            { 
                id: 5,
                name: "oksana",
                link: "https://www.instagram.com/reel/DBg4kOZo9NG/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Klasyki polskiego internetu\n\n -U : Cześć, mam na imię Urszula, a Ty?\n -O : Oksana.\n -U : Oksana, bardzo mi miło, czy możesz nam powiedzieć, jakie masz zainteresowania?\n -O : Znaczy, ogólnie to, interesowania to*, zainteresowania to będzie: dyskoteki, chłopaki i ogólnie takie takie, ale w miarę to nauka mnie najbardziej kręci i w ogóle mam nadzieję na przyszłość.\n -U : Oksano, mam do Ciebie jedno pytanie. Czy jesteś za uwolnieniem krasnali ogrodowych?\n -O : Znaczy, jasne, tak.\n -U : Jesteś za uwolnieniem? A czy jesteś w stanie nam zasymulować taniec krasnala?\n -O : W sumie nie.\n -U : A taniec Twój?\n -O: Też nie.\n -U : Oksano, jest impreza, chociaż rękami.",
                englishTranslation: "Classics of the Polish Internet \n\n -U : Hi, my name is Urszula, and you?\n -O : Oksana.\n -U : Oksana, it's great to meet you, could you tell us what your interests are?\n -O : I mean, generally, my interests are, my interests would be: partys, boys and generally things like that, but science is what excites me the most and I have hope for the future.\n -U : Oksana, I have one question for you. Are you in favor of freeing garden gnomes?\n -O : I mean, sure, yes.\n -U : Are you in favor of freeing them? And are you able to simulate a gnome dancing for us?\n -O : Not really.\n -U : And your dancing?\n -O: Not either.\n -U : Oksana, there's a party, at least with your hands.",
                frenchTranslation: "Les classiques de l'internet polonais\n\n -U : Salut, je m'appelle Urszula, et toi ?\n -O : Oksana.\n -U : Oksana, ravie de te rencontrer, peux-tu nous dire quels sont tes centres d'intérêt ?\n -O : Eh bien, en général, mes intérêts sont, mes intérêts seraient : les discothèques, les garçons et généralement des choses comme ça, mais en ce qui me concerne, ce qui me passionne le plus, c'est d'étudier et j'ai généralement de l'espoir pour l'avenir.\n -U : Oksana, j'ai une question pour toi. Êtes-vous favorable à la libération des nains de jardin ?\n -O : Je veux dire, bien sûr, ouais.\n -U : Êtes-vous pour la libération ? Peux-tu simuler une danse de nain pour nous ?\n -O : Pas vraiment.\n -U : Et ta danse ?\n -O : Non plus.\n -U : Oksana, c'est une soirée, (bouges) au moins avec les mains."
            },
            { 
                id: 6,
                name: "twoja-stara",
                link: "https://www.instagram.com/reel/DD6yBxzKuDi/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Ja do ziomka gdy skończą mi się argumenty, ale dalej się kłócę, żeby go wkurwić\n\n Bardzo ciekawy argument, obawiam się jednak, że Twoja stara...",
                englishTranslation: "Me to my bro when I run out of arguments, but I keep on arguing to piss him off\n\n Very interesting argument, but I'm afraid that your old (mother)...",
                frenchTranslation: "Moi à mon pote quand je suis à court d'arguments, mais je continue à argumenter pour l'énerver\n\n Argument très intéressant, mais j'ai peur que ta vieille..."
            },
            { 
                id: 7,
                name: "dobranoc",
                link: "https://www.instagram.com/reel/DArAmn7gPrj/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Dobranoc, już do spania\n\n Dobranoc, już do spania, do której to się siedzi, normalnie ludzie śpią, nie świecą jak pojeby, późno się już zrobiło, zobacz na zegarek, się rozpanoszył bardzo, nasz nocny, kurwa, marek.",
                englishTranslation: "Good night, it's time for bed\n\n Good night, it's time for bed, what time do you stay up, normal people sleep, they don't shine like idiots, it's already late, check the clock, he run rumpart, our night, fucking owl.",
                frenchTranslation: "Bonne nuit, il est l'heure d'aller au lit\n\n Bonne nuit, il est l'heure d'aller au lit, à quelle heure restes-tu debout, les gens normals dorment, ils ne brillent pas comme des idiots, il est déjà tard, regarde l'horloge, il se pavane, notre, putain, couche-tard."
            },
            { 
                id: 8,
                name: "fajerwerki",
                link: "https://www.instagram.com/reel/DD_6P68IjCK/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Pov: Stary kupił fajerwerki za 69zł. Jego oczekiwania:\n\nPoczątek. Moment narodzin czasu i przestrzeni. Pierwotny fenomen, z którego wyłonił sie wszechświat jaki znamy.",
                englishTranslation: "Pov: Your old (your father) bought fireworks for 69zł. His expectations:\n\n The beginning. The moment of birth of time and space. The primordial phenomenon from which the universe as we know it emerged.",
                frenchTranslation: "Pov : Ton vieux a acheté des feux d'artifice pour 69zł. Ses attentes :\n\n Le commencement. Le moment de la naissance du temps et de l'espace. Le phénomène primordial à partir duquel l'univers tel que nous le connaissons a émergé."
            },
            { 
                id: 9,
                name: "lustro",
                link: "https://www.instagram.com/reel/DDP7ZCdI5F0/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Za każdym razem, jak widzę siebie w lustrze.\n\n Japierdolylyly, jestem zajebiście",
                englishTranslation: "Every time I see myself in the mirror.\n\n Japierdolylyly, I'm so fucking",
                frenchTranslation: "Chaque fois que je me vois dans le miroir.\n\n Japierdolylyly, je suis génial"
            },
            { 
                id: 10,
                name: "tesciowie",
                link: "https://www.instagram.com/reel/DD-DH73OmEX/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Ja dzisiaj u teściów w wigilię \n\n -M : W czym mogę służyć, może pierożka?\n -G : Hm, dobre.",
                englishTranslation: "Me at my in-laws' today on Christmas Eve \n\n -M : What can I help you with, maybe a dumpling?\n -G : Hmm, that's good.",
                frenchTranslation: "Moi chez mes beaux-parents aujourd'hui pour le réveillon de Noël \n\n -M : En quoi puis-je t'aider, peut-être un ravioli ?\n -G : Hmm, c'est bon."
            },
            { 
                id: 11,
                name: "ING",
                link: "https://www.instagram.com/reel/DCHDTcFNm9I/?utm_source=ig_embed&amp;utm_campaign=loading",
                polishText: "Pracownik ING banku, kiedy zauważa mnie w galerii:\n\nNie bój się, nie lękaj się, jestem przyjacielem, nie skrzywdzę cię, chodź tutaj, podejdź do mnie, usiądź obok mnie, spójrz mi w oczy, widzisz mnie, też cię widzę, patrzmy na siebie dopóki nasze oczy się nie zmęczą. Nie chcesz? Dlaczego? Coś nie tak?",
                englishTranslation: "ING bank employee when she spots me in the gallery:\n\n Don't be afraid, don't be scared, I'm a friend, I won't hurt you, come here, come to me, sit next to me, look into my eyes, you see me, I see you too, let's look at each other until our eyes get tired. Don't you want to? Why? Is something wrong?",
                frenchTranslation: "Employé de la banque ING lorsqu'il m'aperçoit dans la galerie :\n\n N'aie pas peur, n'aie pas peur, je suis un ami, je ne te ferai pas de mal, viens ici, viens à moi, assieds-toi à côté de moi, regarde-moi dans les yeux, tu me vois, je te vois aussi, regardons-nous jusqu'à ce que nos yeux se fatiguent. Tu ne veux pas ? Pourquoi? Quelque chose ne va pas ?"
            }
        ];
        
        
        // Trouver la vidéo correspondant à l'ID
        const video = videos.find(v => v.id == videoId);

        if (video) {
            // Sélectionner le blocquote et mettre à jour l'URL
            const blockquote = document.querySelector(".instagram-media");
            if (blockquote) {
                blockquote.setAttribute("data-instgrm-permalink", video.link);
                blockquote.innerHTML = `<a href="${video.link}" class="instagram-media__link" target="_blank">View this post on Instagram</a>`;
            }
            
            // Mettre à jour le texte PolishText avec innerHTML
            const polishTextElement = document.querySelector(".polishText p");
            if (polishTextElement) {
                polishTextElement.innerHTML = video.polishText.replace(/\n/g, "<br>");
            }
            
            // Mettre à jour la traduction avec innerHTML
            const translationTextElement = document.querySelector(".translationText p");
            if (translationTextElement) {
                translationTextElement.innerHTML = video.englishTranslation.replace(/\n/g, "<br>");
            }
            
            // Ajouter les icônes de drapeaux comme boutons sous le h2
            if (video.frenchTranslation) {
                const buttonContainer = document.createElement("div");
                buttonContainer.classList.add("translation-buttons");

                // Bouton drapeau anglais
                const englishButton = document.createElement("img");
                englishButton.src = "https://cdn-icons-png.flaticon.com/128/555/555417.png"; // URL du drapeau UK
                englishButton.alt = "English";
                englishButton.classList.add("flag-icon");
                englishButton.addEventListener("click", function () {
                    translationTextElement.innerHTML = video.englishTranslation.replace(/\n/g, "<br>");
                });

                // Bouton drapeau français
                const frenchButton = document.createElement("img");
                frenchButton.src = "https://cdn-icons-png.flaticon.com/512/206/206657.png"; // URL du drapeau FR
                frenchButton.alt = "Français";
                frenchButton.classList.add("flag-icon");
                frenchButton.addEventListener("click", function () {
                    translationTextElement.innerHTML = video.frenchTranslation.replace(/\n/g, "<br>");
                });

                // Ajouter les images dans le conteneur
                buttonContainer.appendChild(englishButton);
                buttonContainer.appendChild(frenchButton);

                // Insérer juste sous le <h2> de .translationText
                const translationTextDiv = document.querySelector(".translationText");
                if (translationTextDiv) {
                    translationTextDiv.insertBefore(buttonContainer, translationTextDiv.querySelector("p"));
                }
            }

            // Fonction pour ajouter les tooltips
function addTooltipToWord(word, definition) {
    const polishTextElement = document.querySelector(".polishText p");
    if (polishTextElement) {
        const regex = new RegExp(`\\b${word}\\b`, "gi");
        polishTextElement.innerHTML = polishTextElement.innerHTML.replace(regex, `<span class="tooltip-word" data-tooltip="${definition}">${word}</span>`);
    }
}

// Fonction pour ajouter les tooltips
function addTooltipToWord(word, definition) {
    const polishTextElement = document.querySelector(".polishText p");
    if (polishTextElement) {
        const regex = new RegExp(`\\b${word}\\b`, "gi");
        polishTextElement.innerHTML = polishTextElement.innerHTML.replace(regex, `<span class="tooltip-word" data-tooltip="${definition}">${word}</span>`);
    }
}

function adjustBodyHeight() {
    const textWrapper = document.querySelector(".text-wrapper");
    if (textWrapper) {
        const textWrapperHeight = textWrapper.offsetHeight;
        const bodyHeight = document.body.offsetHeight;

        // Ajouter 20px à la hauteur de text-wrapper et ajuster la hauteur du body
        if (textWrapperHeight + 70 > bodyHeight) {
            document.body.style.height = textWrapperHeight + 70 + "px";
        }
    }
}

// Ajuster au chargement et à chaque mise à jour du DOM
window.addEventListener("load", adjustBodyHeight);
window.addEventListener("resize", adjustBodyHeight);

// Appliquer l'ajustement au chargement et lors du redimensionnement
window.addEventListener("load", adjustBodyHeight);
window.addEventListener("resize", adjustBodyHeight);

// Observer les changements dans `.text-wrapper` pour adapter la hauteur du body
const observer = new MutationObserver(() => {
    adjustBodyHeight();
});
observer.observe(document.querySelector(".text-wrapper"), { childList: true, subtree: true });



// Ajouter les définitions
addTooltipToWord("bajojajo", "Expression utilisée par les jeunes pour dire au revoir.");
addTooltipToWord("bambusie", "Littéralement bambou, insulte légérement vulgaire.");
addTooltipToWord("pały", "Littéralement bâtons, mot utilisé pour ce moquer des policiers, faisant référence à leur matraque.");
addTooltipToWord("Twoja stara", "Littéralement t'as vieille, qui fait référence à la mère de son interlocuteur. Il s'agit d'une blague connue par les jeunes en Pologne, quand quelqu'un donne un argument contre nous, on peut répondre : Oui mais t'as vieille.");
addTooltipToWord("zajebiście", "Expression pour dire que quelque chose est géniale, très familier.");

            // Recharger le script Instagram pour réappliquer le style
            const script = document.createElement("script");
            script.src = "//www.instagram.com/embed.js";
            script.async = true;
            document.body.appendChild(script);
        }
    }
});

