<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style-main-page.css') }}">
</head>

<body>
    <a href="{{ route('french.index') }}">
        <img src="https://cdn-icons-png.flaticon.com/512/5921/5921991.png" alt="FR" class="lang-icon">
    </a>
    

    <input type="text" id="searchBar" placeholder="Search a video ..." />

    <div class="card-container">
        @foreach ($videos as $video)
        <div class="card" id="video-{{ $video->id }}"
            data-polish="{{ strtolower($video->polish_text) }}"
            data-english="{{ strtolower($video->translation->english_translation ?? '') }}"
            data-french="{{ strtolower($video->translation->french_translation ?? '') }}"
        >
            <a href="{{ url('/polish-video/' . $video->id) }}">
                <img src="{{ asset('polish-videos/polish-videos-images/n' . $video->id . '-' . $video->name . '.jpg') }}" alt="{{ $video->name }}">
            </a>
        </div>
        @endforeach
    </div>

    <div class="footer">
        <div class="footer-content">
            <a href="https://www.flaticon.com/free-icons/france" title="france icons">
                🚩 France icons created by IYAHICON - Flaticon
            </a>
        </div>
    </div>

    <script>
        // Fonction de recherche
        const searchBar = document.getElementById("searchBar");

        searchBar.addEventListener("input", () => {
            const query = searchBar.value.toLowerCase().trim();

            document.querySelectorAll(".card").forEach(card => {
                const polish = card.dataset.polish || "";
                const english = card.dataset.english || "";
                const french = card.dataset.french || "";

                const matches = [polish, english, french].some(text =>
                    text.includes(query)
                );

                card.style.display = matches ? "block" : "none";
            });
        });
    </script>
</body>
</html>
