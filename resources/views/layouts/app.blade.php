<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script> -->

    <!-- Fonts -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <!-- hint css -->
    <link href="{{ asset('css/hint.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <h1 class="mt-5 mb-3">
                Online-Konsultation
                &bdquo;Zielwertbestimmung für den bundesweiten Indikator
                &sbquo;Artenvielfalt und Landschaftsqualität&lsquo; &ldquo;
              </h1>
              <p>
                Um an der Zielwertbestimmung teilnehmen zu können, müssen Sie
                angemeldet sein.
                <strong>Eine Registrierung ist nicht vorgesehen!</strong>
                Wir haben
                für Sie einen Account mit Ihrer E-Mail-Adresse vorbereitet. Bitte
                klicken Sie auf <em>Passwort vergessen</em> und geben Sie
                anschließend diese E-Mail-Adresse ein. Sie bekommen dann einen
                Link zugesendet, um Ihr Passwort zu aktualisieren. Nach Speicherung
                des Passwortes können Sie die Zielwertbestimmung nutzen.
              </p>
              <p>
                Bei allgemeinen Fragen, z.B. nicht funktionierender E-Mail-Adresse,
                können Sie sich gerne bei
                <a href="mailto:trautmann@dda-web.de">Sven Trautmann</a> melden.
                Bei technischen Fragen wenden Sie sich bitte an
                <a href="mailto:berlin@dda-web.de">Karsten Berlin</a>
              </p>
            </div>
          </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
</body>
</html>
