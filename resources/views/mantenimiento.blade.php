<html lang="{{ str_ireplace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smarttruck - Mantenimiento</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/mantenimiento.css')

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
                <h2 class="title is-2 has-text-white has-text-centered">Mantenimiento</h2>

                <table class="table">
                    <div class="field is-grouped">
                        <p class="control is-expanded">
                            <input class="input" type="text" placeholder="Buscar">
                        </p>

                        <button class="button button-add js-modal-trigger" data-target="modal-add" type="button" style="width: 2.5rem;">
                            <img src="{{asset('images/add')}}" alt="Agregar">
                            <div class="overlay">
                                <span class="span-add has-text-white">Agregar</span>
                            </div>
                        </button>

                    </div>
                    <thead>
                        <tr>
                            <th><abbr>ID</abbr></th>
                            <th>Placa Vehículo</th>
                            <th>Nombre Conductor</th>
                            <th>Descripción</th>
                            <th>Valor</th>
                            <th>Fecha</th>
                            <th>Factura</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>TLP 245</td>
                        <td>Carlos Julio Perez Mora</td>
                        <td>Alineamiento de ejes traseros </td>
                        <td>$250.000</td>
                        <td>31/10/2021</td>
                        <td>
                            <img src="./assets/logo/facture-logo.svg" alt="" style="width: 1.5rem">
                        </td>

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
                        <td>2</td>
                        <td>TDM 735</td>
                        <td>Brayan Camilo Merchan Navas</td>
                        <td>Engrase general</td>
                        <td>$180.000</td>
                        <td>09/08/2022</td>
                        <td>
                            <img src="./assets/logo/facture-logo.svg" alt="" style="width: 1.5rem">
                        </td>

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
                        <td>3</td>
                        <td>SXS 198</td>
                        <td>Jose Angel Lopez Sierra</td>
                        <td>Cambio de bandas traseras</td>
                        <td>$480.000</td>
                        <td>07/09/2022</td>
                        <td>
                            <img src="./assets/logo/facture-logo.svg" alt="" style="width: 1.5rem">
                        </td>

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
                        <td>4</td>
                        <td>KUN 340</td>
                        <td>Mauricio Calixto Perez </td>
                        <td>Nuevos bujes</td>
                        <td>$680.000</td>
                        <td>17/04/2020</td>
                        <td>
                            <img src="./assets/logo/facture-logo.svg" alt="" style="width: 1.5rem">
                        </td>
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

                        <td>5</td>
                        <td>SZK 560</td>
                        <td>Andres Felipe Barahona Beltran</td>
                        <td>Lujos y luces trailer</td>
                        <td>$350.000</td>
                        <td>12/02/2022</td>
                        <td>
                            <img src="./assets/logo/facture-logo.svg" alt="" style="width: 1.5rem">
                        </td>

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
                        <td>6</td>
                        <td>XIK 352</td>
                        <td>Jeison Fabian Arciniegas Orduz</td>
                        <td>Arreglo hidraulico y aire acondicionado</td>
                        <td>$1.500.000</td>
                        <td>25/06/2021 </td>
                        <td>
                            <img src="./assets/logo/facture-logo.svg" alt="" style="width: 1.5rem">
                        </td>

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
                    </tbody>
                </table>




            </div>
        </section>

        <section class="container-modals">

            <div id="modal-edit" class="modal is-clipped">
                <div class="modal-background"></div>
                <div class="modal-content" style="max-height: none;">

                    <div class="container-blue">

                        <h2 class="title is-2 has-text-white is-text-align-center">Modificar Mantenimiento</h2>
                        <form action="">
                            <div class="columns">
                                <div class="column is-half">
                                    <div class="field">
                                        <label class="label has-text-white">Placa Vehiculos
                                            <div class="control">
                                                <input class="input" type="text" placeholder="Placa vehiculo" title="Placa vehiculo" required autofocus>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Nombre Conductor
                                            <input class="input" type="text" placeholder="Nombre Conductor" title="Nombre Conductor" required>
                                        </label>
                                    </div>
                                    <div class="field">
                                        <label class="label has-text-white">Valor Mantenimiento
                                            <input class="input" type="text" placeholder="Valor Mantenimiento" title="Valor Mantenimiento" required>
                                        </label>
                                    </div>



                                </div>

                                <div class="column is-half">
                                    <div class="field">
                                        <label class="label has-text-white">Fecha
                                            <div class="control">
                                                <input class="input" type="date" required>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="field">
                                        <label class="label has-text-white">Descripcion
                                            <input class="input" type="text" placeholder="Descripcion" required>
                                        </label>
                                    </div>
                                    <div class="field">
                                        <div class="file">
                                            <label class="label has-text-white"> Agregar Factura
                                                <input class="file-input" type="file" name="resume">
                                                <span class="file-cta">
                          <span class="file-icon">
                            <img src="./assets/logo/upload-file.svg" alt="">
                          </span>
                          <span class="">
                            Agregar Factura
                          </span>
                        </span>
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="field is-grouped is-text-align-center">
                                <div class="control grouped">
                                    <button type="submit" class="button is-link">Modificar</button>
                                </div>

                                <div class="control grouped">
                                    <a href="./mantenimiento.html">
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
                        <h1 class="title is-1 has-text-white">¿Esta seguro de eliminar este mantenimiento?</h1>
                        <div class="field is-grouped is-flex is-justify-content-center">
                            <div class="control">
                                <a href="./mantenimiento.html">
                                    <button class="button is-light">Si</button>
                                </a>
                            </div>
                            <div class="control">
                                <a href="./mantenimiento.html">
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

                        <h2 class="title is-2 has-text-white is-text-align-center">Agregar Mantenimiento</h2>
                        <form action="">
                            <div class="columns">
                                <div class="column is-half">
                                    <div class="field">
                                        <label class="label has-text-white">Placa Vehiculos
                                            <div class="control">
                                                <input class="input" type="text" placeholder="Placa vehiculo" title="Placa vehiculo" required autofocus>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="field">
                                        <label class="label has-text-white">Nombre Conductor
                                            <input class="input" type="text" placeholder="Nombre Conductor" title="Nombre Conductor" required>
                                        </label>
                                    </div>
                                    <div class="field">
                                        <label class="label has-text-white">Valor Mantenimiento
                                            <input class="input" type="text" placeholder="Valor Mantenimiento" title="Valor Mantenimiento" required>
                                        </label>
                                    </div>



                                </div>

                                <div class="column is-half">
                                    <div class="field">
                                        <label class="label has-text-white">Fecha
                                            <div class="control">
                                                <input class="input" type="date" required>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="field">
                                        <label class="label has-text-white">Descripcion
                                            <input class="input" type="text" placeholder="Descripcion" required>
                                        </label>
                                    </div>

                                    <div class="field">
                                        <div class="file">
                                            <label class="label has-text-white"> Agregar Factura
                                                <input class="file-input" type="file" name="resume">
                                                <span class="file-cta">
                          <span class="file-icon">
                            <img src="./assets/logo/upload-file.svg" alt="">
                          </span>
                          <span class="file-label">
                            Agregar Factura
                          </span>
                        </span>
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="field is-grouped">
                                <div class="control grouped">
                                    <a href="./mantenimiento.html"><button type="submit" class="button is-link">Registrar</button></a>
                                </div>

                                <div class="control grouped">
                                    <a href="./mantenimiento.html"><button type="button" class="button is-light">Cancelar</button></a>
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
