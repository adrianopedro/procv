<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config("data.personal.name") }}</title>

    <meta property="og:url"                content="{{ config("data.url") }}" />
    <meta property="og:type"               content="profile" />
    <meta property="og:title"              content="{{ config("data.personal.name") }}" />
    <meta property="og:description"        content="{{ config("data.keywords") }}" />
    <meta property="og:image"              content="{{ config("data.url") }}/{{ config("data.personal.photo") }}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset("css/app.css") }}" type="text/css" />

    <link rel="shortcut icon" sizes="192x192" href="{{ asset("img/foto.jpg") }}" type="image/x-icon" />
    <link rel="apple-touch-startup-image" href="{{ asset("img/foto.jpg") }}"> 
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158803759-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-158803759-1');
    </script>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate">
              <a class="navbar-brand smooth-scroll" href="/#top" rel="tooltip"><i class="fa fa-lg fa-home"></i></a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                {{-- <li class="nav-item"><a class="nav-link smooth-scroll" href="#top">Top</a></li> --}}
                <li class="nav-item"><a class="nav-link smooth-scroll" href="/#about">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="/#skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="/#portfolio">Portfolio</a></li>
                {{-- <li class="nav-item"><a class="nav-link smooth-scroll" href="/#experience">Experience</a></li> --}}
                <li class="nav-item"><a class="nav-link smooth-scroll" href="/#education">Education</a></li>
                {{-- <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li> --}}
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      @yield("content")
    </div>
    <footer class="footer">
      <div class="container text-center">
        @foreach(config("data.socials") as $social)
          <a class="cc-{{ $social["name"] }} btn btn-link" target="_blank" href="{{ $social["url"] }}" title="Follow me on {{ $social["title"] }}"><i class="{{ $social["icon"] }} fa-2x " aria-hidden="true"></i></a>
        @endforeach
      </div>
      <div class="h4 title text-center">{{ config("data.personal.name") }}</div>
      <div class="text-center text-muted">
        <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
      </div>
    </footer>

    <script src="{{ asset("js/app.js") }}"></script>
  </body>
</html>