<html lang="{{ str_ireplace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smarttruck - Vehículos</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/vehiculos.css')

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
                <h2 class="title is-2 has-text-white has-text-centered">Vehículos</h2>

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
                        <th><abbr>id</abbr></th>
                        <th>Placa</th>
                        <th><abbr>Conductor</abbr></th>
                        <th><abbr>Estado</abbr></th>
                        <th><abbr>Opciones</abbr></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>1</th>
                        <td>AGH-589</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Activo</td>

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
                        <td>AGH-589</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Activo</td>

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
                        <td>AGH-589</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Activo</td>

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
                        <td>AGH-589</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Activo</td>

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
                        <td>AGH-589</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Activo</td>

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
                        <td>AGH-589</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Activo</td>

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

        <section class="container-modals">

            <div id="modal-edit" class="modal is-clipped">
                <div class="modal-background"></div>
                <div class="modal-content" style="max-height: none;">

                    <div class="container-blue">

                        <h2 class="is-text-align-center title is-2 has-text-white">Modificar vehículo</h2>
                        <form action="">
                            <div class="columns">
                                <div class="column is-half">
                                    <div class="field">
                                        <label class="label has-text-white">Placa</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Placa del vehiculo" title="Placa del vehiculo" required autofocus>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">ID conductor</label>
                                        <input class="input" type="number" placeholder="Id del conductor" title="Id del conductor" required>
                                    </div>



                                    <div class="field">
                                        <label class="label has-text-white">Tipo de vehículo</label>
                                        <div class="control">
                                            <div class="select">
                                                <select title="selecciona tipo de vehículo">
                                                    <option>Volqueta</option>
                                                    <option>Camión</option>
                                                    <option>Tractocamión</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="column is-half">

                                    <div class="field">
                                        <label class="label has-text-white">Numero de ejes</label>
                                        <div class="control">
                                            <input class="input" type="number" placeholder="Numero de ejes" title="Número de ejes" required>
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
                                    <a href="./proveedores.html"><button type="submit" class="button is-link">Registrar</button></a>
                                </div>

                                <div class="control grouped">
                                    <a href="./proveedores.html"><button type="button" class="button is-link is-light">Cancelar</button></a>
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
                        <h1 class="title is-1 has-text-white">¿Esta seguro de eliminar este vehículo?</h1>
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

                        <h2 class="is-text-align-center title is-2 has-text-white">Registrar vehículo</h2>
                        <form action="">
                            <div class="columns">
                                <div class="column is-half">
                                    <div class="field">
                                        <label class="label has-text-white">Placa</label>
                                        <div class="control">
                                            <input class="input" type="text" placeholder="Placa del vehiculo" title="Placa del vehiculo" required autofocus>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">ID conductor</label>
                                        <input class="input" type="number" placeholder="Id del conductor" title="Id del conductor" required>
                                    </div>



                                    <div class="field">
                                        <label class="label has-text-white">Tipo de vehículo</label>
                                        <div class="control">
                                            <div class="select">
                                                <select title="selecciona tipo de vehículo">
                                                    <option>Volqueta</option>
                                                    <option>Camión</option>
                                                    <option>Tractocamión</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="column is-half">

                                    <div class="field">
                                        <label class="label has-text-white">Numero de ejes</label>
                                        <div class="control">
                                            <input class="input" type="number" placeholder="Numero de ejes" title="Número de ejes" required>
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
                                    <a href="./proveedores.html"><button type="submit" class="button is-link">Registrar</button></a>
                                </div>

                                <div class="control grouped">
                                    <a href="./proveedores.html"><button type="button" class="button is-link is-light">Cancelar</button></a>
                                </div>

                                <div class="control grouped">
                                    <input type="reset" class="button is-link is-light">
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
