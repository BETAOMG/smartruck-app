<html lang="{{ str_ireplace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smarttruck - Documentación</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/documentacion.css')

    <!-- Scripts -->
    @vite('resources/js/navbar.js')
    @vite('resources/js/modal.js')

</head>
<body>
<header>
    @include('partials/header')
</header>
<main>

    <section class="container-main">

        <div class="container-blue">
            <h2 class="title is-2 has-text-white has-text-centered">Documentación</h2>

            <table class="table">
                <div class="field is-grouped">
                    <p class="control is-expanded">
                        <input class="input" type="text" placeholder="Buscar">
                    </p>
                    <button class="button button-add js-modal-trigger" data-target="modal-add" type="button" style="width: 2.5rem;">
                        <img src="./assets/images/add.png" alt="Agregar">
                        <div class="overlay">
                            <span class="span-add has-text-white">Agregar</span>
                        </div>
                    </button>
                </div>
                <thead>
                <tr>
                    <td><abbr>id</abbr></td>
                    <th>Archivo</th>
                    <th><abbr>Descripcion</abbr></th>
                    <th><abbr>Tamaño</abbr></th>
                    <th><abbr>Fecha</abbr></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>A589</td>
                    <td>xxxxxxxxxxxxxxxxxxxxxxxxx</td>
                    <td>Kb</td>
                    <td>23-05-2022</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>A598</td>
                    <td>xxxxxxxxxxxxxxxxxxxxxxxxx</td>
                    <td>Mb</td>
                    <td>23-06-2022</td>
                </tr>

                </tbody>
            </table>
        </div>
    </section>

</main>
<footer>
    @include('partials/footer')
</footer>
</body>
