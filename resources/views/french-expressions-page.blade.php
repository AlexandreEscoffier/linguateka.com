<!DOCTYPE html>
<html>
<head>
    <title>French Expressions - Linguateka</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style-french-expressions-page.css') }}">
    <link rel="icon" href="{{ asset('/others-images/linguateka-favicon.png') }}" type="image/png">
</head>
<body>
    <div class="linguateka-logo">
        <h1>French Expressions</h1>
    </div>

    <div class="expressions-content">
        <p>This page contain French expressions with their translations, and illustratated with a image.</p>
        
    </div>
</body>

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

</html>
