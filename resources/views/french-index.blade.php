<!DOCTYPE html>
<html>
<head>
    <title>Linguateka French</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style-main-page.css') }}">
</head>

<body>

    <div class="linguateka-logo">
        <h1>Linguateka</h1>
        <a href="{{ route('index') }}" class="link-mobile">
            <img src="https://cdn-icons-png.flaticon.com/512/321/321255.png" alt="PL">
            <span>Polish Version</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
        </a>
    </div>
    <div class="explanation">
        <h1>Learn French with short videos</h1>
    </div>

    <div class="top-controls">
        <div class="main-text-videos-mobile">
            <h2>Videos : </h2>
        </div>
        <input type="text" id="searchBar" placeholder="Search" />
        <a href="{{ route('index') }}" class="link-desktop">
            <img src="https://cdn-icons-png.flaticon.com/512/321/321255.png" alt="PL">
            <span>Polish Version</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
        </a>
    </div>

    <div class="main-text-videos-desktop">
        <h2>Videos : </h2>
    </div>

    <div class="card-container">
        @foreach ($videos as $video)
        <div class="card" id="video-{{ $video->id }}"
            data-french="{{ strtolower($video->french_text) }}"
            data-english="{{ strtolower($video->translation->english_translation ?? '') }}"
            data-polish="{{ strtolower($video->translation->polish_translation ?? '') }}"
        >
            <a href="{{ url('/french-video/' . $video->id) }}">
                <img src="{{ asset('french-videos/french-videos-images/n' . $video->id . '-' . $video->name . '.jpg') }}" alt="{{ $video->name }}">
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
