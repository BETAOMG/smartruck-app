<!DOCTYPE html>
<html lang="{{ str_ireplace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smarttruck - Proveedores</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/proveedores.css')

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
                <h2 class="title is-2 has-text-white has-text-centered">Proveedores</h2>

                <table class="table">
                    <div class="field is-grouped">
                        <p class="control is-expanded">
                            <input class="input" type="text" placeholder="Buscar">
                        </p>

                        <button class="button button-add js-modal-trigger" data-target="modal-add" type="button" style="width: 2.5rem;">
                            <img src="{{ asset("images/add.png") }}" alt="Agregar">
                            <div class="overlay">
                                <span class="span-add has-text-white">Agregar</span>
                            </div>
                        </button>

                    </div>
                    <thead>
                    <tr>
                        <th><abbr>id</abbr></th>
                        <th>Nit</th>
                        <th><abbr>Proveedor</abbr></th>
                        <th><abbr>Estado</abbr></th>
                        <th><abbr>Opciones</abbr></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <th>1</th>
                        <td>51545454</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Activo</td>

                        <td>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link"></a>
                                <div class="navbar-dropdown">
                                    <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                        <img src="{{ asset("images/edit.png") }}" alt="">
                                        Editar
                                    </button>

                                    <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                        <img src="{{ asset("images/inactivate.png") }}" alt="">
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

                        <td>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link"></a>
                                <div class="navbar-dropdown">
                                    <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                        <img src="{{ asset("images/edit.png") }}" alt="">
                                        Editar
                                    </button>

                                    <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                        <img src="{{ asset("images/inactivate.png") }}" alt="">
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

                        <td>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link"></a>
                                <div class="navbar-dropdown">
                                    <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                        <img src="{{ asset("images/edit.png") }}" alt="">
                                        Editar
                                    </button>

                                    <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                        <img src="{{ asset("images/inactivate.png") }}" alt="">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <th>4</th>
                        <td>5454215</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Activo</td>
                        <td>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link"></a>
                                <div class="navbar-dropdown">
                                    <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                        <img src="{{ asset("images/edit.png") }}" alt="">
                                        Editar
                                    </button>

                                    <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                        <img src="{{ asset("images/inactivate.png") }}" alt="">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>

                        <th>5</th>
                        <td>4546546541</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Activo</td>

                        <td>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link"></a>
                                <div class="navbar-dropdown">
                                    <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                        <img src="{{ asset("images/edit.png") }}" alt="">
                                        Editar
                                    </button>

                                    <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                        <img src="{{ asset("images/inactivate.png") }}" alt="">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th>6</th>
                        <td>44654654</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Activo</td>

                        <td>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link"></a>
                                <div class="navbar-dropdown">
                                    <button class="js-modal-trigger button navbar-item" data-target="modal-edit">
                                        <img src="{{ asset("images/edit.png") }}" alt="">
                                        Editar
                                    </button>

                                    <button class="js-modal-trigger button navbar-item" data-target="modal-delete">
                                        <img src="{{ asset("images/inactivate.png") }}" alt="">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </td>

                    </tr>
                    </tbody>
                </table>




            </div>
        </section>

        <section class="container-modals">

            <div id="modal-edit" class="modal is-clipped">
                <div class="modal-background"></div>
                <div class="modal-content" style="max-height: none;">

                    <div class="container-blue">

                        <h2 class="title is-2 has-text-white is-text-align-center">Modificar Proveedor</h2>
                        <form action="">
                            <div class="columns">
                                <div class="column is-half">
                                    <div class="field">
                                        <label class="label has-text-white">Nombre de la Empresa
                                            <div class="control">
                                                <input class="input" type="text" placeholder="Nombre de la Empresa" title="nombre de usuario" required autofocus>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Nit de la empresa
                                            <input class="input" type="text" placeholder="Nit de la empresa" title="apellido de usuario" required>
                                        </label>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Propietario de la empresa
                                            <input class="input" type="text" placeholder="Propietario de la empresa" required>
                                        </label>
                                    </div>

                                </div>

                                <div class="column is-half">
                                    <div class="field">
                                        <label class="label has-text-white">Numero de Telefono
                                            <div class="control">
                                                <input class="input" type="number" placeholder="Numero de Telefono" required>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Ciudad de ubicación
                                            <input class="input" type="text" placeholder="Ciudad de ubicacion" required>
                                        </label>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Dirección
                                            <input class="input" id="typepass" type="text" placeholder="Direccion" required>
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="field is-grouped is-text-align-center">
                                <div class="control grouped">
                                    <button type="submit" class="button is-link">Modificar</button>
                                </div>

                                <div class="control grouped">
                                    <a href="./proveedores.html">
                                        <button type="button" class="button is-link is-light">Cancelar</button>
                                    </a>
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
                        <h1 class="title is-1 has-text-white">¿Esta seguro de eliminar este proveedor?</h1>
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

            <div id="modal-add" class="modal is-clipped">
                <div class="modal-background"></div>
                <div class="modal-content" style="max-height: none;">

                    <div class="container-blue">

                        <h2 class="title is-2 has-text-white has-text-centered">Registrar proveedor</h2>


                        <form action="">
                            <div class="columns">
                                <div class="column is-half">
                                    <div class="field">
                                        <label class="label has-text-white">Nombre de la Empresa</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Nombre de la Empresa" title="nombre de usuario" required autofocus>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Nit de la empresa</label>
                                        <input class="input" type="text" placeholder="Nit de la empresa" title="apellido de usuario" required>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Propietario de la empresa</label>
                                        <input class="input" type="text" placeholder="Propietario de la empresa" required>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Tipo de producto</label>
                                        <div class="control">
                                            <div class="select">
                                                <select title="selecciona tipo de carga">
                                                    <option>Liquido</option>
                                                    <option>Solido</option>
                                                    <option>Ganado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-half">
                                    <div class="field">
                                        <label class="label has-text-white">Numero de Telefono</label>
                                        <div class="control">
                                            <input class="input" type="number" placeholder="Numero de Telefono" required>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Ciudad de ubicacion</label>
                                        <input class="input" type="text" placeholder="Ciudad de ubicacion" required>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Direccion</label>
                                        <input class="input" id="typepass" type="text" placeholder="Direccion" required>

                                    </div>

                                </div>
                            </div>
                            <div class="field is-grouped">
                                <div class="control grouped">
                                    <a href="./proveedores.html"><button type="submit" class="button is-link">Registrar</button></a>
                                </div>

                                <div class="control grouped">
                                    <a href="./proveedores.html"><button type="button" class="button is-light">Cancelar</button></a>
                                </div>

                                <div class="control grouped">
                                    <button type="reset" class="button is-light">Restablecer</button>
                                </div>
                            </div>
                        </form>

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
