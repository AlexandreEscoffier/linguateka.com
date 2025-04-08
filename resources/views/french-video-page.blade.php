<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Embed</title>
    <link rel="stylesheet" href="{{ asset('css/style-french-video-page.css') }}">
</head>

<body>
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
            <div class="frenchText">
                <h2>French text : </h2>
                <p>{!! nl2br(e($video->french_text)) !!}</p>
            </div>
            <div class="translationText">
                <div class="translationTextUpper">
                    <h2>Translated text : </h2>
                    <p id="translationText">
                        @if ($translation)
                            {!! nl2br(e($translation->english_translation)) !!}
                        @else
                            No translation available.
                        @endif
                    </p>
                    </p>

                    <!-- Ajouter les boutons pour changer de traduction si la traduction française existe -->
                    @if ($translation && $translation->polish_translation)
                        <div class="translation-buttons">
                            <!-- Bouton pour afficher la traduction en anglais -->
                            <img src="https://cdn-icons-png.flaticon.com/128/555/555417.png" alt="English"
                                class="flag-icon" onclick="changeTranslation('english')">

                            <!-- Bouton pour afficher la traduction en français -->
                            <img src="https://cdn-icons-png.flaticon.com/512/321/321255.png" alt="Polonais"
                                class="flag-icon" onclick="changeTranslation('polish')">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeTranslation(language) {
            const translationTextElement = document.getElementById('translationText');

            if (language === 'english') {
                @if ($translation)
                    translationTextElement.innerHTML = `{{ $translation->english_translation }}`.replace(/\n/g, "<br>");
                @endif
            } else if (language === 'polish') {
                @if ($translation && $translation->polish_translation)
                    translationTextElement.innerHTML = `{{ $translation->polish_translation }}`.replace(/\n/g, "<br>");
                @endif
            }
        }
    </script>

    <div class="tooltip"></div>
    <div class = "footer">
        <div class="footer-content">
            <a href="https://www.flaticon.com/free-icons/uk-flag" title="uk flag icons">
                🚩 UK flag icons created by Freepik - Flaticon
            </a>
            <a href="https://www.flaticon.com/free-icons/poland" title="poland icons">
                🚩 Poland icons created by Roundicons - Flaticon
            </a>
        </div>
        <script src="polish-videos.js"></script>
        <script src="video-loader.js"></script>
        <script async src="//www.instagram.com/embed.js"></script>
</body>

</html>
