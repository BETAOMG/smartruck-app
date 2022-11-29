<html lang="{{ str_ireplace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smarttruck - Satrack</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/rutas.css')

    <!-- Scripts -->
    @vite('resources/js/navbar.js')
    @vite('resources/js/modal.js')

</head>
<body>
<header>
    @include('partials/header')
</header>
<main>
    <section class="container-section">
        <div class="container-blue">
            <iframe src="https://login.satrack.com/login?lng=es&ctry=CO" width="700rem" height="700rem"></iframe>
        </div>
    </section>
</main>
<footer>
    @include('partials/footer')
</footer>
</body>
