<div class="container-logo">
    <img src="{{ asset("images/logo-dark.svg") }}" alt="Smarttruck">
</div>

<nav class="navbar nav-bar-container" role="navigation" aria-label="main navigation" >

    <div class="navbar-brand">
        <div class="navbar-burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu ">
        <a class="navbar-item" href="{{('inicio')}}">
            <img src="{{ asset("logo/home-logo.svg") }}" width="" >
        </a>

        <div class="navbar-start">

            <div class="navbar-item has-dropdown is-hoverable">

                <span class="navbar-link has-background-link-light">
                    Gestionar
                </span>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{asset('usuarios')}}">
                        Usuarios
                    </a>

                    <a class="navbar-item" href="{{asset('proveedores')}}">
                        Proveedores
                    </a>

                    <a class="navbar-item" href="{{asset('vehiculos')}}">
                        Vehiculos
                    </a>
                </div>

            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <span class="navbar-link has-background-link-light">
                    Mantenimiento
                </span>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{asset('mantenimiento')}}">
                        Gestionar mantenimiento
                    </a>
                </div>

            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <span class="navbar-link has-background-link-light">
                    Documentacion
                </span>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{asset('documentacion')}}">
                        Gestionar documentacion
                    </a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <span class="navbar-link has-background-link-light">
                    Normativas
                </span>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{asset('normativa')}}">
                        Ver normativas
                    </a>
                </div>

            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <span class="navbar-link has-background-link-light">
                    Rutas
                </span>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{asset('rutas/satrack')}}">
                        Satrack
                    </a>
                    <a class="navbar-item" href="{{asset('rutas/peajes')}}">
                        Peajes
                    </a>
                    <a class="navbar-item" href="{{asset('rutas/cierrevial')}}">
                        Cierre vial
                    </a>

                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <span class="navbar-link has-background-link-light">
                    Atencion al cliente
                </span>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{asset('atencioncliente')}}">
                        Preguntas,  reclamos, sugerencias
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="#">
                    <img class="logo-perfil" src="{{asset('images/user.svg')}}" alt="" >
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="#">
                        Ver perfil
                    </a>

                    <hr class="navbar-divider">

                    <a class="navbar-item is-active" href="./inicio-sesion.html">
                        Cerrar sesion
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
