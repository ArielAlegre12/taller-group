<nav class="navbar navbar-expand-lg navbar-estilo shadow-sm sticky-top">
    <div class="container-fluid">

        <!--LOGO-->
        <a href="#" class="navbar-brand fw-bold brand">Huellas Felices</a>

        <!--TOGGLER-->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMain">
            <!--BUSCADOR--->
            <form class="search-bar d-flex mx-auto">
                <input type="search" placeholder="Buscar productos, servicios...">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>

            <!--ACCIONES DE LA DERECHA-->
            <div class="nav-actions ms-auto d-flex align-items-center gap-3">

                <!--Usuario-->
                <a href="#" class="nav-link">Ingresar</a>

                <!--Carrito-->
                <div class="cart mobile-cart">
                    <i class="bi bi-cart"></i>
                    <span>0</span>
                </div>
            </div>
        </div>
    </div>
</nav>

<!--NAV SECUNDARIO-->
<nav class="subnav">
    <div class="container-fluid">
        
        <a href="principal">Principal</a>
        <a href="tienda">Tienda</a>
        <a href="servicios">Servicios</a>

        <!--dropdown menú--->
        <div class="dropdown">
            
            <a class="dropdown-toggle subnav-link" href="#" role="button" data-bs-toggle="dropdown">Info</a>

            <ul class="dropdown-menu">
                <li>
                    <a href="informacionContactos" class="dropdown-item">Información de Contacto</a>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <a href="consultas" class="dropdown-item">Consultas</a>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <a href="comercializacion" class="dropdown-item">Comercialización</a>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <a href=""></a>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <a href="quienesSomos" class="dropdown-item">Quienes Somos</a>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <a href="terminosUsos" class="dropdown-item">Términos y Uso</a>
                </li>
            </ul>
        </div>
    </div>
</nav>