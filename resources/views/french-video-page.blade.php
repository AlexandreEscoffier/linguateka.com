<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Embed - Linguateka</title>
    <link rel="stylesheet" href="{{ asset('css/style-french-video-page.css') }}">
    <link rel="icon" href="{{ asset('/others-images/linguateka-favicon.png') }}" type="image/png">
</head>

<body>

    <a href="{{ route('french.index') }}" class="return-text"><img src="https://cdn-icons-png.flaticon.com/128/2459/2459427.png">Return</a>

    <div class="main-content">
        <div class="video-container">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="{{ $video->link }}"
                data-instgrm-version="14">
                <div class="instagram-media__inner">
                    <a href="{{ $video->link }}" class="instagram-media__link" target="_blank">View this post on
                        Instagram</a>
                </div>
            </blockquote>
        </div>

    <div class="text-wrapper">
        <p class="video-title-video-page">{{ $video->display_name }}</p>
    
        <div id="accordion-text">
            <!-- Accordéon : Texte polonais -->
            <details class="accordion-item">
                <summary>Text</summary>
                <p>{!! nl2br(e($video->french_text)) !!}</p>
            </details>
    
            <!-- Accordéon : Traduction anglaise -->
            @if ($translation && $translation->english_translation)
                <details class="accordion-item">
                    <summary>Translation 1 (English)</summary>
                    <p>{!! nl2br(e($translation->english_translation)) !!}</p>
                </details>
            @endif
    
            <!-- Accordéon : Traduction française -->
            @if ($translation && $translation->polish_translation)
                <details class="accordion-item">
                    <summary>Translation 2 (Polish)</summary>
                    <p>{!! nl2br(e($translation->polish_translation)) !!}</p>
                </details>
            @endif
        </div>
    </div>

</div>

    <div class="tooltip"></div>
 
    <footer class="footer-custom-video-page">
        <div class="footer-left-video-page">
          <h2>Linguateka</h2>
          <p>By Alexandre ESCOFFIER<br>and Karolina WINIARSKA</p>
        </div>
      
        <div class="footer-center-video-page">
            <a href="{{ route('french.index') }}" class="footer-link-video-page">
            <img src="https://flagcdn.com/fr.svg" alt="FR" class="flag-icon-video-page"> French Version
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
          </a>
          <a href="{{ route('index') }}" class="footer-link-video-page">
            <img src="https://flagcdn.com/pl.svg" alt="PL" class="flag-icon-video-page"> Polish Version
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256"><path d="M200,64V168a8,8,0,0,1-16,0V83.31L69.66,197.66a8,8,0,0,1-11.32-11.32L172.69,72H88a8,8,0,0,1,0-16H192A8,8,0,0,1,200,64Z"></path></svg>
          </a>
        </div>

        <div class="footer-right-video-page">
            <a href="https://www.linkedin.com/in/alexandre-escoffier-077a9a1a3/" class="linkedin-link-video-page" target="_blank">
              <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="linkedin-icon-video-page">
             Linkedin
            </a>
          </div>
      </footer>

        <script src="polish-videos.js"></script>
        <script src="video-loader.js"></script>
        <script async src="//www.instagram.com/embed.js"></script>
</body>

</html>
