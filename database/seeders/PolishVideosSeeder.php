<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PolishVideo;
use App\Helpers\SpecialWords;


class PolishVideosSeeder extends Seeder
{
    public function run()
    {
        $videos = [
            [
                'name' => "bajojajo",
                'display_name' => "bajojajo",
                'link' => "https://www.instagram.com/reel/DDpxifIoefH/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "-A : Bajojajo, bajojajo!\n -B : Ja ci dam bajojajo, pierdolony bambusie w dupe zajebany. Jest, do kurwy nędzy, weekend, zamknij tę mordę.",
                'tags' => 'difficulty_medium, sub-titles, popular_meme',
            ],
            [
                'name' => "paczek",
                'display_name' => "pączek z lukrem vs z pudrem",
                'link' => "https://www.instagram.com/reel/DBJTfadgHuF/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Pączuszek z lukrem / Pączuszek z pudrem\n\n Pączuszek z lukrem i pączuszek z pudrem głośno się kurwy sprzeczają w pudle. Kłócą się o to, który jest lepszy. Wpierdoliłem oba i spory odeszły",
                'tags' => 'difficulty_medium',
            ],
            [
                'name' => "mojego-pola",
                'display_name' => "moje pole",
                'link' => "https://www.instagram.com/reel/DDStZAqKO6V/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Klasyki polskiego internetu\n\n -A :Jestem dobry. Jestem dobry? Karol Okrasa jak zwykle w samym sercu wydarzeń. Moi drodzy, oto dziś... \n -B : Wypierdalać z mojego pola! \n -A : -Proszę pana, my z telewizji jesteśmy! ... Przepraszam?! Czemu pan rzuca? Proszę pana! Ale my z telewizji! Kurwa, no !",
                'tags' => 'difficulty_easy, sub-titles, popular_meme',
            ],
            [
                'name' => "bileciki-do-kontroli",
                'display_name' => "bileciki do kontroli",
                'link' => "https://www.instagram.com/reel/DDUgEUcIkQs/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Bileciki do kontroli / Czasem nie warto pajacować\n\n -A : Dzień dobry, kontrola biletów, proszę przygotować bilety do kontroli. Dziękuję. Dziękuję. Bileciki do kontroli, proszę. \n -B : Nie mam \n -A : Ee to będzie mandat. \n -B : Hy, nie no, w dupę se wsadź ten mandat \n -A : Jeszcze raz się tak, kurwa, do mnie odezwiesz, to ci odjebię, rozmumiesz? \n -B : Yy, tt, to ja miesięczny, poproszę \n -A : No, od razu lepiej, hehe. Miejskie przedsiębiorstwo komunikacyjne życzy spokojnej i bezpiecznej podróży.",
                'tags' => 'difficulty_medium',
            ],
            [
                'name' => "koziol",
                'display_name' => "kozioł bandyta",
                'link' => "https://www.instagram.com/reel/DEm2n7bPioi/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Uciekł z więzienia kozioł bandyta\n\n Uciekł z więzienia kozioł bandyta, chciał na wolności posmakować życia. Cieszy się śniegiem i dobrą zabawą... O kurwa! To pały! Już za nim jadą.",
                'tags' => 'difficulty_normal',
            ],
            [
                'name' => "oksana",
                'display_name' => "Oksana",
                'link' => "https://www.instagram.com/reel/DBg4kOZo9NG/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Klasyki polskiego internetu\n\n -U : Cześć, mam na imię Urszula, a Ty?\n -O : Oksana.\n -U : Oksana, bardzo mi miło, czy możesz nam powiedzieć, jakie masz zainteresowania?\n -O : Znaczy, ogólnie to, interesowania to*, zainteresowania to będzie: dyskoteki, chłopaki i ogólnie takie takie, ale w miarę to nauka mnie najbardziej kręci i w ogóle mam nadzieję na przyszłość.\n -U : Oksano, mam do Ciebie jedno pytanie. Czy jesteś za uwolnieniem krasnali ogrodowych?\n -O : Znaczy, jasne, tak.\n -U : Jesteś za uwolnieniem? A czy jesteś w stanie nam zasymulować taniec krasnala?\n -O : W sumie nie.\n -U : A taniec Twój?\n -O: Też nie.\n -U : Oksano, jest impreza, chociaż rękami.",
                'tags' => 'difficulty_medium, sub-titles, popular_meme',
            ],
            [
                'name' => "twoja-stara",
                'display_name' => "twoja stara",
                'link' => "https://www.instagram.com/reel/DD6yBxzKuDi/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Ja do ziomka gdy skończą mi się argumenty, ale dalej się kłócę, żeby go wkurwić\n\n Bardzo ciekawy argument, obawiam się jednak, że Twoja stara...",
                'tags' => 'difficulty_easy',
            ],
            [
                'name' => "dobranoc",
                'display_name' => "dobranoc",
                'link' => "https://www.instagram.com/reel/DArAmn7gPrj/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Dobranoc, już do spania\n\n Dobranoc, już do spania, do której to się siedzi, normalnie ludzie śpią, nie świecą jak pojeby, późno się już zrobiło, zobacz na zegarek, się rozpanoszył bardzo, nasz nocny, kurwa, marek.",
                'tags' => 'difficulty_medium',
            ],
            [
                'name' => "fajerwerki",
                'display_name' => "fajerwerki dla starego",
                'link' => "https://www.instagram.com/reel/DD_6P68IjCK/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Pov: Stary kupił fajerwerki za 69zł. Jego oczekiwania:\n\nPoczątek. Moment narodzin czasu i przestrzeni. Pierwotny fenomen, z którego wyłonił sie wszechświat jaki znamy.",
                'tags' => 'difficulty_medium',
            ],
            [
                'name' => "lustro",
                'display_name' => "lustro",
                'link' => "https://www.instagram.com/reel/DDP7ZCdI5F0/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Za każdym razem, jak widzę siebie w lustrze.\n\n Japierdolylyly, jestem zajebiście",
                'tags' => 'difficulty_easy',
            ],
            [
                'name' => "tesciowie",
                'display_name' => "tesciowie dni",
                'link' => "https://www.instagram.com/reel/DD-DH73OmEX/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Ja dzisiaj u teściów w wigilię \n\n -M : W czym mogę służyć, może pierożka?\n -G : Hm, dobre.",
                'tags' => 'difficulty_easy, sub-titles',
            ],
            [
                'name' => "ING",
                'display_name' => "Pracownik ING banku",
                'link' => "https://www.instagram.com/reel/DCHDTcFNm9I/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Pracownik ING banku, kiedy zauważa mnie w galerii:\n\nNie bój się, nie lękaj się, jestem przyjacielem, nie skrzywdzę cię, chodź tutaj, podejdź do mnie, usiądź obok mnie, spójrz mi w oczy, widzisz mnie, też cię widzę, patrzmy na siebie dopóki nasze oczy się nie zmęczą. Nie chcesz? Dlaczego? Coś nie tak?",
                'tags' => 'difficulty_medium',
            ],
            [
                'name' => "CV",
                'display_name' => "Kiedy nakłamałeś za bardzo w CV",
                'link' => "https://www.instagram.com/reel/C_-wbU4ItmA/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "POV: Nakłamałeś za bardzo w CV\n\nW wydarzeniach sprawdzamy, jak wygląda sytuacja na Dolnym Śląsku. Łączymy się z Katarzyną Janke, która jest w Kłodzku. ... Witaj, Kasiu, powiedz, jak wygląda sytuacja... o!",
                'tags' => "difficulty_easy",
            ],
            [
                'name' => "duolingo2",
                'display_name' => "Duolingo phrases in real life 2",
                'link' => "https://www.instagram.com/reel/DABbijJI7wi/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Duolingo phrases in real life Part II\n\n  Mężczyzna pojawia się tylko w nocy.\n Dasz mi na piwo?\n Mężczyzna zapytał, ale nikt nie odpowiedział.\n Chcesz pająka?\n Nie masz wstydu!\n Rozmawiała z żółwiem.\n Ona jest dziwna, ale ją lubię.\n To co zrobiłeś jest przestępstwem!",
                'tags' => "difficulty_easy, sub-titles",
            ],
            [
                'name' => "duolingo1",
                'display_name' => "Duolingo phrases in real life",
                'link' => "https://www.instagram.com/reel/C_vhTRvIwm_/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Duolingo phrases in real life Part\n\nTwój żółw jest młodszy niż mój krab.\n Ten kot nie wie, co to radość.\n Wasz pies jest dziś bardzo spokojny.\n Nie ma tutaj wilków.\n Jesteś kotem? Miau!\n Lubię oglądać dzikie zwierzęta.\n Wasza kaczka wydaje się idealna.\n To jest flaming.\n Szczegóły nie są teraz ważne.",
                'tags' => "difficulty_easy, sub-titles",
            ],
            [
                'name' => "warmiaczka2",
                'display_name' => "Warmia tu !",
                'link' => "https://www.instagram.com/reel/C-acgKlsFqB/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "POV: Nie wkurzaj Warmiaczki cz.2\n\n-A : Idziemy!\n-B : Co Ty taka wkurzona jesteś?\n-A : Turystę spotkałam.\n-B : I co?\n-B : No i co?-A : Powiedział, że ładnie tu na Mazurach mamy!\n-B : I co zrobiłaś?\n-A : No i go pogoniłam na Mazury, bo tu jest Warmia!",
                'tags' => "difficulty_medium, sub-titles",
            ],
            [
                'name' => "slabyzasieg",
                'display_name' => "slabyzasieg",
                'link' => "https://www.instagram.com/reel/C9nBmZ1Cuyi/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Kiedy ktoś zacznie oglądać serial w drugim pokoju\n\n-A : Przepraszam.\n-A : Lewy (11x). Przesuń się. Przesuń swoje dupsko.\n-B : Nie mogę. (śmiech w tle)\n-B : Nie mogę.",
                'tags' => "difficulty_easy, sub-titles",
            ],
            [
                'name' => "klient-lody",
                'display_name' => "klient lody",
                'link' => "https://www.instagram.com/reel/C9NfGJlNNbJ/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Typy klientów w gastro\n\n1. Ten co nie widzi\n-A : Dzień dobry, po ile są lody?\n-A : A jaki smak ma ta lemoniada?\n-B : Pomarańczowy.\n-A : Dzień dobry, czy są lody?\n-B : tak\n2. Ten co nie słucha\n-A : To będzie tak, czekoladowy,\n-B : Ale najpierw ilość, a potem dopiero smaki...\n-A : ... i truskawka, ta z jabłkiem... i jeszcze bym poprosiła karmel.\n-B : Płatność będzie kartą czy gotówką?\n-A : Yyy, tak!\n-B : Aha.\n3. Palcujący szyby.\n-A : Te wszystkie lody są takie piękne i smaczne, że nie wiem, który wybrać",
                'tags' => "difficulty_easy",
            ],
            [
                'name' => "duda",
                'display_name' => "duda",
                'link' => "https://www.instagram.com/reel/DG5fp5rovU2/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Znajomi: Lecimy gdzieś razem na wakacje? Ja : \n\nJestem gotów usiąść i rozmawiać. Zapraszam. Proszę przyjść do mnie z konkretnymi propozycjami, proszę powiedzieć, że chcecie państwo się spotkać, bo macie tego typu propozycje... Ja nie widzę problemu.",
                'tags' => "difficulty_easy, popular_meme",
            ],
            [
                'name' => "chlopskirozum",
                'display_name' => "chlopskirozum",
                'link' => "https://www.instagram.com/reel/DEvjqJbNn4I/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Magister\nDoktor\nHabilitowany\nProfesor\nChłopski rozum",
                'tags' => "difficulty_easy, sub-titles",
            ],
            [
                'name' => "muzykawaucie",
                'display_name' => "muzykawaucie",
                'link' => "https://www.instagram.com/reel/DHJhrvEtNkt/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Kiedy pokłócisz się z dziewczyną\n\n-A : W moim samochodzie słuchamy mojej muzyki! Nie?! To sama sobie jedź, na razie! ... Przepraszam, mogę z państwem jechać? Pojadę z państwem. Z dziewczyną się pokłóciłem, mnie wkuriwa, tam w samochodzie za nami, nie chce mi się z nią gadać. Niech sama se jedzie.Gdzie jedziemy?\n-B : Na razie jedziemy na Sienkiewicza.\n-A : O, jedziemy na Sienkiewicza, co będziemy robić?\n-B : Tam wiozę chłopaka, bo tam ma rower, a potem na zakupy jadę.-A : A na zakupy. A mogę z panem na zakupy jechać?",
                'tags' => "difficulty_medium",
            ],
            [
                'name' => "spanko",
                'display_name' => "spanko",
                'link' => "https://www.instagram.com/p/DHOoo5AtQkr/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Kiedy jesteś ze znajomymi na mieście i pytają się o 22:30 gdzie teraz lecimy Best I can do is do spania",
                'tags' => "difficulty_easy, sub-titles",
            ],
            [
                'name' => "polskamoment",
                'display_name' => "polskamoment",
                'link' => "https://www.instagram.com/reel/DEM2cGgIKRw/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "polska moment\n\n-A : Całkiem smaczna. Cierpka, ale nie przesadnie.\n-B : A masz piwo?\n-A : Zaraz sprawdzę.",
                'tags' => "difficulty_easy",
            ],
            [
                'name' => "deoro",
                'display_name' => "deoro",
                'link' => "https://www.instagram.com/reel/DG_H6LqIBGH/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "A1: Co?\nA2: Słucham?\nB1: Jak, proszę?\nB2: Pardon?\nC1: Mogę prosić o wyjaśnienie?\nC2: Co dokładnie masz na myśli? Potrzebuję pełniejszego wyjaśnienia, żeby dokładnie zrozumieć sytuację",
                'tags' => "difficulty_medium, sub-titles",
            ],
            [
                'name' => "podusia",
                'display_name' => "podusia",
                'link' => "https://www.instagram.com/reel/DFmbnNtN-lS/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Kiedy w poniedziałek rano musisz wstać do pracy, ale wcale ci się nie chce\n\nMm, podusia. A jaka jest milusia i mięciusia. Kocyk leciusi i cieplusi, łóżeczko w sam raz, a najważniejsze, że moje łapy wystają mi z niego. Dlaczego wystają? Bo tak ma być.",
                'tags' => "difficulty_medium",
            ],
            [
                'name' => "wpracy",
                'display_name' => "wpracy",
                'link' => "https://www.instagram.com/reel/DFx6FhQMN7R/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Kiedy szef pyta, co będę dzisiaj robił w pracy\nJa\n\nNo zobaczymy, to czas pokaże, co będę robił. Tak jak to w słynnym, w słynnej swojej wypowiedzi, powiedzał pan Zenek Martyniuk: czas pokaże. No więc czas pokaże!",
                'tags' => "difficulty_medium, popular_meme",
            ],
            [
                'name' => "spanko-kot",
                'display_name' => "spanko kot",
                'link' => "https://www.instagram.com/p/Cq2hXl0tOYo/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "1. To było wspaniałe.\n2. Wyszepcz mi do ucha jeszcze raz te 3 słowa.\n3. SPANKO PO OBIEDZIE\n4. O taaaak...",
                'tags' => "difficulty_medium, sub-titles",
            ],
            [
                'name' => "komar",
                'display_name' => "komar",
                'link' => "https://www.instagram.com/reel/C7Zp0WfIH4w/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Kiedy jest ciepły wieczór i otwierasz okno\n\n",
                'tags' => "difficulty_easy, sub-titles",
            ],
            [
                'name' => "kicia",
                'display_name' => "kicia",
                'link' => "https://www.instagram.com/reel/C8fMx6NoFE6/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Kiedy idziesz spacerkiem i nagle... kicia nieoblokowana! Kontynuuj eksporację świata i wróć później, aby odblokować kicię.",
                'tags' => "difficulty_easy, sub-titles",
            ],
            [
                'name' => "nina",
                'display_name' => "nina",
                'link' => "https://www.instagram.com/reel/C8nCFzzoC2M/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Jak on mógł?!\n\n-A : I jak ci smakuje?\n-B : Szczerze? Moja była lepiej gotowała.\n-A : Że co?\n-B : Nie no, żartuję. Pyszne!\n...Na zawsze w naszych sercach.\nMaciej Błaszczyk. 2000-2024\nPróbował być zabawny...",
                'tags' => "difficulty_easy, sub-titles",
            ],
            [
                'name' => "goroco",
                'display_name' => "goroco",
                'link' => "https://www.instagram.com/reel/C8zm7VNoPE5/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Kiedy chcesz spać, ale jest bardzo gorąco i nagle...zimna strona poduszki chłodna mordeczko, w cierpieniu ulżyj.",
                'tags' => "difficulty_easy, sub-titles",
            ],
            [
                'name' => "wroclawtram",
                'display_name' => "wroclawtram",
                'link' => "https://www.instagram.com/reel/C8aB6_rMkF1/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "POV: your sleep paralysis demon is the Wroclaw tram voice\n\nLinia 1. Kierunek: Biskupin. Następny przystanek: Ogród Botaniczny. The botanical gardens.",
                'tags' => "difficulty_easy",
            ],
            [
                'name' => "4nocgodzina",
                'display_name' => "4nocgodzina",
                'link' => "https://www.instagram.com/reel/C1e9ECtMXwg/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Ojciec: Masz wrócić przed 21:00\nOjciec:\nTy o 4:30\n\n-A : Wróciłem do domu, Mistrzu.\n-B : To już nie jest twój dom. A ja już nie jestem Twoim mistrzem.",
                'tags' => "difficulty_easy",
            ],
            [
                'name' => "moya",
                'display_name' => "moya",
                'link' => "https://www.instagram.com/reel/C4laGsnMx84/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "-A : Co ty robisz? Nauczyć cię jeździć?\n-B : Tak.\n-A : Sprzęgło.\n-B : Tak.\n-A : I delikatnie w lewo, jedyneczka, yhym, puść hamulec i delikatnie puszczaj sprzęgło.\n-B : Dobra.\n-A : Jedziemy, jedziemy. Kieruneczek, bo jedziemy w lewo. No i troszeczkę gazu, gazu, gazu",
                'tags' => "difficulty_easy",
            ],
            [
                'name' => "drzewo",
                'display_name' => "drzewo",
                'link' => "https://www.instagram.com/reel/C8zu6EWIfE3/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "drzewo",
                'tags' => "difficulty_easy, sub-titles",
            ],
            [
                'name' => "grzyby",
                'display_name' => "grzyby",
                'link' => "https://www.instagram.com/reel/C_f7OknKILh/?utm_source=ig_embed&amp;utm_campaign=loading+C19:C26",
                'polish_text' => "Polski symulator\n\nPowstał polski symulator zbierania grzybów, jeżdżenia polonezem. (To niemożliwe!) W tej grze budzisz się w pięknym domu, tworzysz swojego 'ludzia', wsiadasz do eleganckiej furki i śmigasz do lasu, aby zebrać wszystkie grzyby przed innymi. Jak na grzybiarza przystało, jesteś wyposażony w atlas, z którym kontrolujesz swoje zbiory. Oprócz zbierania grzybów, możesz także wykonywać różne zadania zlecone przez napotkanych ludzi, a za zebrany hajs tuningować poloneza lub kupić nową furę. Gra jest bardzo klimatyczna i mocno przypomina 'My summer car', co jest oczywiście dużym plusem. 'Mushroom season' wyszedł we wczesnym dostępie na Steamie. Znacie bardziej polską grę? Dajcie znać w komentarzu.",
                'tags' => "difficulty_hard, sub-titles",
            ],
            [
                'name' => "korporacje",
                'display_name' => "korporacje",
                'link' => "https://www.instagram.com/reel/DD9Lo3ws2kA/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Kochani, proszę, nie rozmawiajmy o polityce przy wigilijnym stole\n\nWidziałem jak korporacje zabierają farmerom wodę, a potem ziemię. Od dawna kontrolują nasze życie, a teraz chcą sięgnąć po nasze dusze. To jest wojna ludzi przeciw systemowi, który wymknął się spod kontroli.Walka spierdolonymi siłami entropii. Rozumiesz?",
                'tags' => "difficulty_medium",
            ],
            [
                'name' => "zapytam",
                'display_name' => "zapytam",
                'link' => "https://www.instagram.com/reel/DAL4kywIChL/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Kiedy zapytam męża, czy wie, jaki jest dziś dzień\n\nKiedy zapytam męża, czy wie, jaki jest dziś dzień\nA) rocznica\nB) urodziny\nC) imieniny\nD) środa",
                'tags' => "difficulty_easy",
            ],
            [
                'name' => "polskie-kalandar",
                'display_name' => "pokskie kalandar",
                'link' => "https://www.instagram.com/reel/DDu1sSetfrG/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Most normal Christmas calendar in Poland\n\nMuszę zobaczyć, co tam w kalendarzu. Jest kurwa 13... O! Ale zajebiście, znowu piwo! Kurwa, takie kalendarze to ja lubię",
                'tags' => "difficulty_easy",
            ],
            [
                'name' => "dziwny-samochod",
                'display_name' => "dziwny samochod",
                'link' => "https://www.instagram.com/reel/DB62r8bo-G7/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Meanwhile in Poland\n\nJa się pytam: co to kurwa jest? Kosmici kurwa? Co to kurwa jest? Ja pierdole.",
                'tags' => "difficulty_easy",
            ],
            [
                'name' => "ratatuj",
                'display_name' => "ratatuj",
                'link' => "https://www.instagram.com/reel/DGfgW-bMTn6/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "Poczekaj\n\nPoczekaj, kurwa, Ratatuj, poczekaj! Ratatuj, kurwa, ratatuj, chodź. Chodź, bo ja nie wiem, jak gotować, mordo.",
                'tags' => "difficulty_easy, sub-titles, popular_meme",
            ],
            [
                'name' => "zajecia1",
                'display_name' => "zajecia1",
                'link' => "https://www.instagram.com/reel/DFAKWOhMrGj/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "How do you say bad in Polish?\nChujnia.\nHow about go crazy?\nOchujeć.\nMake a fool out of someone?\nWychujać.\nI don't care.\nChuj tam.\nVirtuoso?\nPrzechuj.\nHow do you say that something bad has happened and it can't be reverted?\nChuj bombki strzelił.\nAnd how can you reply in Polish when your brilliant is met with a refusal?\nA to chuj ci w dupę.",
                'tags' => "difficulty_meidum, sub-titles",
            ],
            [
                'name' => "zajecia2",
                'display_name' => "zajecia2",
                'link' => "https://www.instagram.com/reel/DFnjUE9MPAR/?utm_source=ig_embed&amp;utm_campaign=loading",
                'polish_text' => "How do you say in Polish that something is difficult, complicated and boring?\nChujnia z grzybnią.\nBut she did it so well that no one can question her work.\nNie ma chuja we wsi.\nAnd it was quite cheap, too!\nZa psi chuj.\nI don't know how she does it, but I guess that's none of my business. It doesn't really matter.\nChuj wie. Chuj mnie to obchodzi.A chuj z tym.",
                'tags' => "difficulty_medium, sub-titles",
            ],
        ];

        foreach ($videos as $video) {
            PolishVideo::create($video);
        }
    }
}

