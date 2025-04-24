<!DOCTYPE html>
<html>

<head>
    <title>Linguateka Polish</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style-main-page.css') }}">
    <link rel="icon" href="{{ asset('/others-images/linguateka-favicon.png') }}" type="image/png">
</head>

<body>

<div class="linguateka-logo">
    <img src="{{ asset('/others-images/linguateka-logo.png')}}" class="linguateka-logo-image" alt="linguateka-logo">
    <h1>Linguateka</h1>
</div>

<div class="top-controls-mobile">
    <div class="main-text-videos-mobile">

        <div class="combo-box-mobile">
            <a href="{{ route('french.index') }}" class="link-mobile compact-link">
                <img src="https://cdn-icons-png.flaticon.com/512/206/206657.png" alt="Français">
                <div class=link-mobile-span><span>FR Version</span></div>
            </a>

            <div class="separator-mobile"></div>

            <div class="burger-wrapper-mobile">
                <button id="burger-mobile-toggle">&#9776;</button>
                <div id="burger-mobile-content">
                    <a href="{{ route('polish-vocabulary-road') }}">Polish Vocabulary</a>
                    <a href="{{ route('polish-expressions-road') }}">Polish Expressions</a>
                    <a href="{{ route('french.index') }}">French Version</a>
                </div>
            </div>
        </div>

        <div class="explanation-mobile">
            <h1>Learn Polish with short videos</h1>
        </div>
    </div>

    <div class="filter-wrapper-mobile">
        <button id="filter-toggle-mobile">
            <img src="https://cdn-icons-png.flaticon.com/128/17961/17961351.png" alt="Filter Icon" class="filter-icon-button">
        </button>
        <div id="filter-panel-mobile" class="hidden">
            <label>
                <input type="checkbox" id="subtitleFilter">
                Subtitles in video
            </label>

            <div class="difficulty-filter-mobile">
                <button class="difficulty-btn-mobile" data-difficulty="easy">Easy</button>
                <button class="difficulty-btn-mobile" data-difficulty="medium">Medium</button>
                <button class="difficulty-btn-mobile" data-difficulty="hard">Hard</button>
            </div>

            <div class="meme-filter-mobile">
                <button class="tag-btn-mobile" data-tag="popular_meme">Popular Meme</button>
            </div>

        </div>
    </div>

    <input type="text" id="searchBar-mobile" placeholder="Search" />

</div>

<div class="explanation">
    <h1>Learn Polish with short videos</h1>
</div>

<div class="top-controls">
    <input type="text" id="searchBar" placeholder="Search" />

    <div class="filter-wrapper">
        <button id="filter-toggle">
            <img src="https://cdn-icons-png.flaticon.com/128/17961/17961351.png" alt="Filter Icon" class="filter-icon-button">
        </button>
        <div id="filter-panel" class="hidden">
            <label>
                <input type="checkbox" id="subtitleFilter">
                Subtitles in video
            </label>

            <div class="difficulty-filter">
                <button class="difficulty-btn" data-difficulty="easy">Easy</button>
                <button class="difficulty-btn" data-difficulty="medium">Medium</button>
                <button class="difficulty-btn" data-difficulty="hard">Hard</button>
            </div>

            <div class="meme-filter">
                <button class="tag-btn" data-tag="popular_meme">Popular Meme</button>
            </div>

        </div>
    </div>

    <div class="combo-box">
        <a href="{{ route('french.index') }}" class="link-desktop compact-link">
            <img src="https://cdn-icons-png.flaticon.com/512/206/206657.png" alt="Français">
            <span>French Version</span>
        </a>

        <div class="separator"></div>

        <div class="burger-wrapper">
            <button id="burger-toggle">&#9776;</button>
            <div id="burger-content">
                <a href="{{ route('polish-vocabulary-road') }}">Polish Vocabulary</a>
                <a href="{{ route('polish-expressions-road') }}">Polish Expressions</a>
                <a href="{{ route('french.index') }}">French Version</a>
            </div>
        </div>
    </div>
</div>

<div class="main-text-videos-desktop">
    <h2>Videos : </h2>
</div>

<div class="second-main-text-mobile">
    <h2>Videos : </h2>
</div>

<div id="no-results-message" class="no-results-message">
    <img src="{{ asset('/others-images/frog-in-misunderstanding.jpg') }}" alt="No video found">
    <p>No video found</p>
</div>

<div class="card-container">
    @foreach ($videos as $video)
    <div class="card" id="video-{{ $video->name }}"
        data-polish="{{ strtolower($video->polish_text) }}"
        data-english="{{ strtolower($video->translation->english_translation ?? '') }}"
        data-french="{{ strtolower($video->translation->french_translation ?? '') }}"
        data-tags="{{ strtolower($video->tags) }}"
    >
        <a href="{{ url('/polish-video/' . $video->name) }}">
            <img src="{{ asset('polish-videos/polish-videos-images/' . $video->name . '.jpg') }}" alt="{{ $video->name }}">
        </a>
        <p class="video-title">{{ $video->display_name }}</p>
    </div>
    @endforeach
</div>

<footer class="footer-custom">
    <div class="footer-left">
        <h2>Linguateka</h2>
        <p>By Alexandre ESCOFFIER<br>and Karolina WINIARSKA</p>
    </div>

    <div class="footer-center">
        <a href="{{ route('french.index') }}" class="footer-link">
            <img src="https://flagcdn.com/fr.svg" alt="FR" class="flag-icon"> French Version
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
        </a>
        <a href="{{ route('index') }}" class="footer-link">
            <img src="https://flagcdn.com/pl.svg" alt="PL" class="flag-icon"> Polish Version
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
        </a>
    </div>

    <div class="footer-right">
        <a href="https://www.linkedin.com/in/alexandre-escoffier-077a9a1a3/" class="linkedin-link" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="linkedin-icon">
            Linkedin
        </a>
    </div>
</footer>

<script>
    const searchBars = [document.getElementById("searchBar"), document.getElementById("searchBar-mobile")];
    const subtitleCheckboxes = document.querySelectorAll("#subtitleFilter");
    const difficultyButtonsAll = document.querySelectorAll(".difficulty-btn, .difficulty-btn-mobile");
    let selectedDifficulties = new Set();
    let popularMemeActive = false;

    function filterVideos() {
    let query = "";
    searchBars.forEach(bar => {
        if (bar && bar.value.trim() !== "") {
            query = bar.value.toLowerCase().trim();
        }
    });

    let subtitlesChecked = false;
    subtitleCheckboxes.forEach(cb => {
        if (cb.checked) subtitlesChecked = true;
    });

    const tagsToMatch = [];
        if (popularMemeActive) tagsToMatch.push("popular_meme");

    let anyVisible = false;

    document.querySelectorAll(".card").forEach(card => {
        const polish = card.dataset.polish || "";
        const english = card.dataset.english || "";
        const french = card.dataset.french || "";
        const tags = (card.dataset.tags || "").split(',').map(tag => tag.trim());

        const textMatch = [polish, english, french].some(text => text.includes(query));
        const subtitlesMatch = !subtitlesChecked || tags.includes("sub-titles");

        const difficultyMatch = selectedDifficulties.size === 0 ||
            Array.from(selectedDifficulties).some(diff => tags.includes(`difficulty_${diff}`));

        const tagMatch = tagsToMatch.length === 0 || tagsToMatch.some(tag => tags.includes(tag));
        const visible = textMatch && subtitlesMatch && difficultyMatch && tagMatch;

        card.style.display = visible ? "block" : "none";

        if (visible) anyVisible = true;
    });

    // 🎯 Met à jour les titres si aucune vidéo n'est visible
    const mainTextDesktop = document.querySelector('.main-text-videos-desktop h2');
    const mainTextMobile = document.querySelector('.second-main-text-mobile h2');

    if (mainTextDesktop) {
        mainTextDesktop.textContent = anyVisible ? "Videos :" : "";
    }

    if (mainTextMobile) {
        mainTextMobile.textContent = anyVisible ? "Videos :" : "";
    }

    const noResultsDiv = document.getElementById('no-results-message');
    if (noResultsDiv) {
        noResultsDiv.style.display = anyVisible ? "none" : "block";
    }
}


    searchBars.forEach(bar => {
        if (bar) bar.addEventListener("input", filterVideos);
    });
    subtitleCheckboxes.forEach(cb => {
        cb.addEventListener("change", filterVideos);
    });

    difficultyButtonsAll.forEach(button => {
        button.addEventListener("click", () => {
            const difficulty = button.dataset.difficulty;

            if (selectedDifficulties.has(difficulty)) {
                selectedDifficulties.delete(difficulty);
                button.classList.remove("active");
            } else {
                selectedDifficulties.add(difficulty);
                button.classList.add("active");
            }

            filterVideos();
        });
    });

    const tagButton = document.querySelector('.tag-btn');

    if (tagButton) {
        tagButton.addEventListener('click', () => {
            popularMemeActive = !popularMemeActive;
            tagButton.classList.toggle("active");
            filterVideos();
        });
    }

    const tagButtonMobile = document.querySelector('.tag-btn-mobile');

    if (tagButtonMobile) {
        tagButtonMobile.addEventListener('click', () => {
            popularMemeActive = !popularMemeActive;
            tagButtonMobile.classList.toggle("active");
            filterVideos();
        });
    }


    const filterToggle = document.getElementById('filter-toggle');
    const filterPanel = document.getElementById('filter-panel');
    filterToggle.addEventListener('click', () => {
        filterPanel.classList.toggle('hidden');
    });

    window.addEventListener("load", () => {
        searchBars.forEach(bar => {
            if (bar) bar.value = "";
        });
        subtitleCheckboxes.forEach(cb => {
            cb.checked = false;
        });
        selectedDifficulties.clear();
        difficultyButtonsAll.forEach(btn => btn.classList.remove("active"));
        filterPanel.classList.add('hidden');
        filterVideos();
    });

    const burgerToggle = document.getElementById('burger-toggle');
    const burgerContent = document.getElementById('burger-content');
    burgerToggle.addEventListener('click', () => {
        burgerContent.style.display = burgerContent.style.display === 'block' ? 'none' : 'block';
    });
    document.addEventListener('click', (e) => {
        if (!burgerToggle.contains(e.target) && !burgerContent.contains(e.target)) {
            burgerContent.style.display = 'none';
        }
    });
</script>

<script>
    document.addEventListener('click', function (event) {
        const filterToggle = document.getElementById('filter-toggle');
        const filterPanel = document.getElementById('filter-panel');
        if (!filterPanel.classList.contains('hidden') &&
            !filterToggle.contains(event.target) &&
            !filterPanel.contains(event.target)) {
            filterPanel.classList.add('hidden');
        }
    });
</script>

<script>
    const burgerMobileToggle = document.getElementById('burger-mobile-toggle');
    const burgerMobileContent = document.getElementById('burger-mobile-content');
    if (burgerMobileToggle && burgerMobileContent) {
        burgerMobileToggle.addEventListener('click', () => {
            burgerMobileContent.style.display = burgerMobileContent.style.display === 'block' ? 'none' : 'block';
        });
        document.addEventListener('click', (e) => {
            if (!burgerMobileToggle.contains(e.target) && !burgerMobileContent.contains(e.target)) {
                burgerMobileContent.style.display = 'none';
            }
        });
    }

    const filterMobileToggle = document.getElementById('filter-toggle-mobile');
    const filterPanelMobile = document.getElementById('filter-panel-mobile');
    if (filterMobileToggle && filterPanelMobile) {
        filterMobileToggle.addEventListener('click', () => {
            filterPanelMobile.classList.toggle('hidden');
        });
        document.addEventListener('click', (e) => {
            if (!filterMobileToggle.contains(e.target) && !filterPanelMobile.contains(e.target)) {
                filterPanelMobile.classList.add('hidden');
            }
        });
    }
</script>

</body>
</html>
