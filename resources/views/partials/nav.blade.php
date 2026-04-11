<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Huellas Felices</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#huellas-felices"
            aria-controls="huellas-felices" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="huellas-felices">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('principal') ? 'active' : '' }}" aria-current="page"
                        href="principal">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tienda') ? 'active' : '' }}" href="tienda">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('servicios') ? 'active' : '' }}" href="servicios">Servicios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Info</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->is('informacionContactos') ? 'active' : '' }}"
                                href="informacionContactos">Información de contactos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item {{ request()->is('consultas') ? 'active' : '' }}"
                                href="consultas">Consultas</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item {{ request()->is('comercializacion') ? 'active' : '' }}"
                                href="comercializacion">Comercialización</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item {{ request()->is('quienesSomos') ? 'active' : '' }}"
                                href="quienesSomos">Quienes somos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item {{ request()->is('terminosUsos') ? 'active' : '' }}"
                                href="terminosUsos">Términos y Uso</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-3">
                <!--carrito-->
                <div class="drowpdown position-relative">
                    <div class="carrito-icono dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="bi bi-cart"></i>
                        <span class="badge bg-light text-dark">0</span>
                    </div>
                    <!--sublista para ver las opciones del carrito-->
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a href="#" class="dropdown-item">Ver Carrito</a></li>
                        <li><a href="#" class="dropdown-item">Vaciar Carrito</a></li>
                    </ul>
                </div>
                <!--buscador--->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" />
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</nav>