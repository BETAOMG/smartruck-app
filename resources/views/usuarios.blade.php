<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Smart Truck - Usuarios</title>

    <!-- Fonts -->


    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @vite('resources/css/header.css')
    @vite("resources/css/footer.css")
    @vite('resources/css/usuarios.css')

    <!-- Scripts -->

    @vite("resources/js/navbar.js")
    @vite('resources/js/modal.js')


    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        /*html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}*/
    </style>

    {{--<style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>--}}
</head>
<body class="antialiased">
<header>
    @include('partials/header')
</header>

<main>

    <section class="container-main">
        <div class="container-blue">
            <h2 class="title is-2 has-text-centered has-text-white">Usuarios</h2>

            <table class="table">
                <div class="field is-grouped">
                    <p class="control is-expanded">
                        <input class="input" type="text" placeholder="Buscar usuario">
                    </p>

                </div>
                <thead>
                <tr>
                    <th><abbr>id</abbr></th>
                    <th>Documento</th>
                    <th><abbr>Nombre</abbr></th>
                    <th><abbr>Estado</abbr></th>
                    <th><abbr>Rol</abbr></th>
                    <th><abbr>Opciones</abbr></th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <th>1</th>
                    <td>51545454</td>
                    <td>Carlos Julio Perez Mora</td>
                    <td>Activo</td>
                    <td>Conductor</td>
                    <td>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link"></a>
                            <div class="navbar-dropdown">
                                <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                    <img src="./assets/images/editar.png" alt="">
                                    Editar
                                </button>

                                <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                    <img src="./assets/images/eliminar.png" alt="">
                                    Eliminar
                                </button>

                            </div>
                        </div>
                    </td>


                </tr>
                <tr>
                    <th>2</th>
                    <td>45456456456</td>
                    <td>Carlos Julio Perez Mora</td>
                    <td>Activo</td>
                    <td>Conductor</td>
                    <td>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link"></a>
                            <div class="navbar-dropdown">
                                <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                    <img src="./assets/images/editar.png" alt="">
                                    Editar
                                </button>

                                <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                    <img src="./assets/images/eliminar.png" alt="">
                                    Eliminar
                                </button>

                            </div>
                        </div>
                    </td>


                </tr>
                <tr>
                    <th>3</th>
                    <td>5555454454</td>
                    <td>Carlos Julio Perez Mora</td>
                    <td>Activo</td>
                    <td>Usuario</td>
                    <td>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link"></a>
                            <div class="navbar-dropdown">
                                <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                    <img src="./assets/images/editar.png" alt="">
                                    Editar
                                </button>

                                <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                    <img src="./assets/images/eliminar.png" alt="">
                                    Eliminar
                                </button>

                            </div>
                        </div>
                    </td>



                <tr>
                <tr>
                    <th>4</th>
                    <td>5454215</td>
                    <td>Carlos Julio Perez Mora</td>
                    <td>Inactivo</td>
                    <td>Usuario</td>
                    <td>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link"></a>
                            <div class="navbar-dropdown">
                                <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                    <img src="./assets/images/editar.png" alt="">
                                    Editar
                                </button>

                                <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                    <img src="./assets/images/eliminar.png" alt="">
                                    Eliminar
                                </button>

                            </div>
                        </div>
                    </td>
                <tr>
                <tr>
                    <th>5</th>
                    <td>4546546541</td>
                    <td>Carlos Julio Perez Mora</td>
                    <td>Activo</td>
                    <td>Usuario</td>
                    <td>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link"></a>
                            <div class="navbar-dropdown">
                                <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                    <img src="./assets/images/editar.png" alt="">
                                    Editar
                                </button>

                                <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                    <img src="./assets/images/eliminar.png" alt="">
                                    Eliminar
                                </button>

                            </div>
                        </div>
                    </td>



                <tr>
                <tr>
                    <th>6</th>
                    <td>44654654</td>
                    <td>Carlos Julio Perez Mora</td>
                    <td>Inactivo</td>
                    <td>Conductor</td>
                    <td>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link"></a>
                            <div class="navbar-dropdown">
                                <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                    <img src="./assets/images/editar.png" alt="">
                                    Editar
                                </button>

                                <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                    <img src="./assets/images/eliminar.png" alt="">
                                    Eliminar
                                </button>
                            </div>
                        </div>
                    </td>
                <tr>
                </tbody>
            </table>
        </div>
    </section>


    <section class="modals">
        <!-- Aqui van los modales -->

        <div id="modal-edit" class="modal is-clipped">
            <div class="modal-background"></div>
            <div class="modal-content" style="max-height: none;">
                <div class="container-blue contenedor">
                    <h2 class="is-text-align-center title is-2 has-text-white">Modificar usuario</h2>
                    <form action="">
                        <div class="columns">

                            <div class="column is-half">
                                <div class="field">
                                    <label class="label has-text-white">Nombre</label>
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Nombre del usuario" title="Nombre del usuario" required autofocus>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label has-text-white">Rol</label>
                                    <div class="control">
                                        <div class="select">
                                            <select title="selecciona tipo de vehículo">
                                                <option>Conductor</option>
                                                <option>Usuario</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="column is-half">

                                <div class="field">
                                    <label class="label has-text-white">Documento</label>
                                    <div class="control">
                                        <input class="input" type="number" placeholder="Numero de documento" title="Número de documento" required>
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="label has-text-white">Estado</label>
                                    <div class="control">
                                        <div class="select">
                                            <select title="selecciona el estado de vehículo">
                                                <option>Activo</option>
                                                <option>Inactivo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control grouped">
                                <a href="">
                                    <button type="submit" class="button is-link">
                                        Confirmar
                                    </button>
                                </a>
                            </div>

                            <div class="control grouped">
                                <a href="./usuarios.html"><button type="button" class="button is-link is-light">Cancelar</button></a>
                            </div>

                            <div class="control grouped">
                                <input type="reset" class="button is-link is-light">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div id="modal-delete" class="modal">
            <div class="modal-background"></div>

            <div class="modal-content" >
                <div class="container-blue container-center" >
                    <img class="image-delete" src="./assets/images/delete.svg" alt="">
                    <h1 class="title is-1 has-text-white">¿Esta seguro de eliminar este usuario?</h1>
                    <div class="field is-grouped is-flex is-justify-content-center">
                        <div class="control">
                            <a href="./proveedores.html">
                                <button class="button is-light">Si</button>
                            </a>
                        </div>
                        <div class="control">
                            <a href="./proveedores.html">
                                <button class="button is-link is-danger">No</button>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </section>

</main>

<footer>
    @include('partials/footer')
</footer>

</body>
</html>
