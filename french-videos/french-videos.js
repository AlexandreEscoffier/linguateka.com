document.addEventListener("DOMContentLoaded", function () {
    // Récupérer l'ID de la vidéo depuis l'URL
    const urlParams = new URLSearchParams(window.location.search);
    const videoId = urlParams.get("id");

    if (videoId !== null) {
        // Charger le fichier contenant les vidéos
        const videos = [
            {
                id: 0,
                name: "cailloux",
                link: "https://www.instagram.com/reel/DFyAyS-oeJR/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "J'arrête d'essayer de discuter avec des L2 Sciences de la terre (L2 pour licence 2, donc les étudiants en deuxième année de licence de biologie)\n\n -B : Quand Bart pas occupé, Bart penser. Beaucoup.\n -G : À quoi, si je puis me permettre ?\n -B : Cailloux.\n -G : Cailloux ? \n -B : Cailloux passionnants.",
                englishTranslation: "stone",
                polishTranslation: "kamien"
            },
            {
                id: 1,
                name: "cauchemar-en-cuisine",
                link: "https://www.instagram.com/reel/DEw65h-tgcX/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "- A : J'ai commandé une entrecôte. Je lui ai bien spécifié la cuisson que je voulais, donc elle a pas intérêt à me la faire cramer.\n -B : Pardon.\n -A : C'est pas vrai ?\n -B : Pardon pour le rot.\n -A : Putain mais c'est une blague ! Hector au pied !\n -C : Parfois je me demande si elle le fait exprès ou si elle est juste conne. Puis après du coup j'ai la réponse.\n -A : Hector... j'ai demandé une entrecôte bleue. C'est une blague ?\n -C : Non c'est une conne.\n -A : C'est bon, j'en ai ma claque ! Je fonce en cuisine !\n -C : Oh putain la bombe, qu'est qu'on a fait on a allumé une bombe !\n -A : J'ai 45 restaurants j'ai jamais vu ça.\n -A : Entrecôte bleue ça veut pas dire entrecôte colorier en bleue ! Et les carottes râpées dans la boite-là ! C'est pas frais ! Vous dites que c'est frais sur la carte mais c'est faux !\n -D : Bien sûr que si elles étaient fraiches elles étaient au congélo.\n -A : Mais congeler ça veut pas dire frais !\n -D : Bah pourtant c'était froid.\n -A : Putain mais elle comprend rien ! Il est au ton congel là ?!\n -A : Ah mais putain ça pue ! Il est pété votre frigo ou quoi ?\n -A : Il est pas pété en fait, il est juste débranché !\n -D : Oh la la bah ouais merde !\n -A : Et vous avez mis une lampe toute pourrie a la place ?\n -D :  Euh toute pourrie c'est un héritage de la famille ça vaut 8000 balles.\n -A : Je vais t'apprendre à cuisiner de la viande moi ! C'est quoi ce délire là il y a un piaf crevé dans la cuisine.\n -D : Encore !\n -A : Comment ça encore ?\n -D : La bouffe elle se retrouve toujours par terre.\n -A : La bouffe ?! Putain mais vous m'avez fait bouffer du pigeon crevé ?!\n -D : Il y a forcément un fantôme quelque part par ce que...\n -D : Hector c'est un patron d'amour hein, il trouve des problèmes a chaque solutions.",
                englishTranslation: "cauchemar in cuisine",
                polishTranslation: "-A : Zamówiłem antrykot. Wyraźnie powiedziałem jej, jak ma być wysmażony, więc lepiej, żeby mi go nie spaliła.\n -B : Przepraszam.\n -A : Chyba żartujesz?\n -B : Przepraszam za beknięcie.\n -A : Kurwa, to jakiś żart! Hector, do nogi!\n -C : Czasem się zastanawiam, czy ona to robi specjalnie, czy po prostu jest głupia. A potem od razu dostaję odpowiedź.\n -A : Hector... Zamówiłem antrykot krwisty. To jakiś żart?\n -C : Nie, ona po prostu jest głupia.\n -A : Mam już dość! Idę do kuchni!\n -C : O cholera, odpaliliśmy bombę, co myśmy narobili?!\n -A : Mam 45 restauracji i nigdy czegoś takiego nie widziałem.\n -A : Antrykot krwisty nie znaczy antrykot pokolorowany na niebiesko! A te tarte marchewki w tym pudełku? To nie jest świeże! W menu piszecie, że jest świeże, ale to kłamstwo!\n -D : Oczywiście, że były świeże, były w zamrażarce.\n -A : Zamrożone nie znaczy świeże!\n -D : Ale przecież były zimne.\n -A : Kurwa, ona nic nie rozumie! Termostat w zamrażarce działa, czy co?!\n -A : O ja pierdolę, ale tu śmierdzi! Wasza lodówka jest zepsuta, czy co?\n -A : Właściwie to nie jest zepsuta, po prostu jest odłączona!\n -D : O cholera, faktycznie!\n -A : I zamiast niej wstawiliście jakąś tandetną lampę?!\n -D : Eee… Tandetna?! To rodzinne dziedzictwo, warte 8000 euro\n. -A : Ja cię nauczę, jak się gotuje mięso! Co tu się odpierdala, w kuchni leży zdechły ptak!\n -D : Znowu?!\n -A : Jak to „znowu”?!\n -D : Jedzenie zawsze ląduje na podłodze.\n -A : Jedzenie?! Kurwa, czy wy mnie karmiliście zdechłym gołębiem?!\n -D : Tu na pewno jest jakiś duch, bo…\n -D : Hector to cudowny szef, on znajduje problemy na każde rozwiązanie."
            },
            {
                id: 2,
                name: "pas-avoir-saisi-sa-chance",
                link: "https://www.instagram.com/reel/DEfOLA9NaKT/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "-A : Mais du coup toi tu fais quoi dans la vie ?\n -B : Rien, et toi ?\n -A : Euh bah, je je fais un peu de dessin hein, un peu...\n -B : Ah ouais activité de gamin en mode.\n -A : Ok, ouais du coup t'as peut etre des passions aussi toi ?\n -B : Ouais moi j'aime bien manger, j'aime bien rire, j'aime bien euh me lever, j'aime bien ouvrir la porte avec la clef après fermer la porte...",
                englishTranslation: "no chance",
                polishTranslation: "-A : No więc, czym się zajmujesz w życiu?\n -B : Niczym, a ty?\n -A : Eee, no, trochę rysuję, tak trochę...\n -B : Aha, czyli takie dziecięce zajęcie.\n -A : Ok... No to może ty masz jakieś pasje?\n -B : Tak, lubię jeść, lubię się śmiać, lubię... wstawać, lubię otwierać drzwi kluczem, potem zamykać drzwi..."
            },
            {
                id: 3,
                name: "va-dormir",
                link: "https://www.instagram.com/reel/DDX2NzcgiZA/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "Va dormir, Va dormir !\n Tu vois actuellement tu regardes cette vidéo dans cette position collée à ton oreiller.\n Bah tu devrais pas avoir ton téléphone là !\n Tu devrais dormir ok !\n Donc maintenant t'arrêtes tes conneries, tu me coupes ce téléphone et tu vas dormir !",
                englishTranslation: "go sleep !",
                polishTranslation: "idz spac !"
            },
            {
                id: 4,
                name: "la-roue-tourne",
                link: "https://www.instagram.com/reel/DD620-eiGEJ/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "-A : Et comme on dit la roue elle tourne très fort t'inquiéte pas mon grand wallah radim la roue elle tourne.\n -B : Va niquer t'as mère toi et la roue.",
                englishTranslation: "the wheel",
                polishTranslation: "nie wiem"
            },
            {
                id: 5,
                name: "je-sais-reconnaitre-un-pd",
                link: "https://www.instagram.com/reel/DCo6wY-NIKm/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "je sais reconnaitre un pd",
                englishTranslation: "I know how see gay",
                polishTranslation: "wiem kiedy sa gay"
            },
            {
                id: 6,
                name: "bolcheviques",
                link: "https://www.instagram.com/reel/DDz5RtsOudQ/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "bolcheviques",
                englishTranslation: "bolcheviques",
                polishTranslation: "rosjanin"
            },
            {
                id: 7,
                name: "elle-ment",
                link: "https://www.instagram.com/reel/DAHVGuns-Cd/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "elle ment",
                englishTranslation: "she lies",
                polishTranslation: "ona klamie"
            },
            {
                id: 9,
                name: "pmu",
                link: "https://www.instagram.com/reel/DBg2LL3gcHW/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "pmu",
                englishTranslation: "pub",
                polishTranslation: "browar"
            },
            {
                id: 10,
                name: "yugi-vs-cell",
                link: "https://www.instagram.com/reel/DC9klejCaGu/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "yugi vs cell",
                englishTranslation: "yugi vs cell",
                polishTranslation: "yugi vs cell"
            },
            {
                id: 11,
                name: "ca",
                link: "https://www.instagram.com/reel/C-243obBErp/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "ça",
                englishTranslation: "this",
                polishTranslation: "ten"
            },
            {
                id: 12,
                name: "allo-mon-chou",
                link: "https://www.instagram.com/reel/C7hI-Kms3x5/?utm_source=ig_embed&amp;utm_campaign=loading",
                frenchText: "allo mon chou",
                englishTranslation: "hello my sweet",
                polishTranslation: "dzien dobry kapusta"
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
            
            // Mettre à jour le texte FrenchText avec innerHTML
            const frenchTextElement = document.querySelector(".frenchText p");
            if (frenchTextElement) {
                frenchTextElement.innerHTML = video.frenchText.replace(/\n/g, "<br>");
            }
            
            // Mettre à jour la traduction avec innerHTML
            const translationTextElement = document.querySelector(".translationText p");
            if (translationTextElement) {
                translationTextElement.innerHTML = video.englishTranslation.replace(/\n/g, "<br>");
            }
            
            // Ajouter les icônes de drapeaux comme boutons sous le h2
            if (video.polishTranslation) {
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

                // Bouton drapeau polonais
                const polishButton = document.createElement("img");
                polishButton.src = "https://cdn-icons-png.flaticon.com/512/321/321255.png"; // URL du drapeau PL
                polishButton.alt = "Polski";
                polishButton.classList.add("flag-icon");
                polishButton.addEventListener("click", function () {
                    translationTextElement.innerHTML = video.polishTranslation.replace(/\n/g, "<br>");
                });

                // Ajouter les images dans le conteneur
                buttonContainer.appendChild(englishButton);
                buttonContainer.appendChild(polishButton);

                // Insérer juste sous le <h2> de .translationText
                const translationTextDiv = document.querySelector(".translationText");
                if (translationTextDiv) {
                    translationTextDiv.insertBefore(buttonContainer, translationTextDiv.querySelector("p"));
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



            // Recharger le script Instagram pour réappliquer le style
            const script = document.createElement("script");
            script.src = "//www.instagram.com/embed.js";
            script.async = true;
            document.body.appendChild(script);
        }
    }
});
