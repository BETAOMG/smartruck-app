<html lang="{{ str_ireplace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smarttruck - Atención al cliente</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/atencioncliente.css')

    <!-- Scripts -->
    @vite('resources/js/navbar.js')
    @vite('resources/js/modal.js')

</head>
<body>
<header>
    @include('partials/header')
</header>
<main>

    <section>
        <div class="container-blue">
            <h2 class="title is-2 has-text-white is-text-align-center">Atencion al cliente</h2>
            <div class="logo">
                <img src="./assets/logo/call-logo.svg" alt="">
            </div>
            <form action="" class="mt-6">

                <div class="columns">
                    <div class="column is-half">

                        <div class="field">
                            <label class="label has-text-white">Nombre</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Nombre">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label has-text-white">Email</label>
                            <div class="control">
                                <input class="input" type="email" placeholder="Correo">
                            </div>

                        </div>

                    </div>
                    <div class="column is-half">

                        <div class="field">
                            <label class="label has-text-white">Mensaje</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="field is-grouped is-text-align-center">
                    <div class="control grouped">
                        <button type="submit" class="button is-link">Enviar</button>
                    </div>

                    <div class="control grouped">
                        <a href="./atencionalcliente.html">
                            <button type="button" class="button is-link is-light">Cancelar</button>
                        </a>
                    </div>

                    <div class="control grouped">
                        <input type="reset" class="button is-link is-light">
                    </div>
                </div>
            </form>
        </div>
    </section>

</main>
<footer>
    @include('partials/footer')
</footer>
</body>
