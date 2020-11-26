<header>
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="home"><img class="header__logo" src="images/corona.png" alt="CompuKing Logo" />
                                    <span class="logo__titulo"><strong>Compu</strong><span
                                            class="logo__titulo--diseño"><strong>King</strong></span> </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                @if($template=='layout.template-home')
                                <li class="nav-item active">
                                @else
                                <li class="nav-item">
                                @endif
                                    <a class="nav-link" href="home">Inicio</a>
                                </li>

                                @if($template=='layout.template-about')
                                <li class="nav-item active">
                                @else
                                <li class="nav-item">
                                @endif
                                    <a class="nav-link" href="about">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about">Computadoras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="laptop.html">Laptops</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="product.html">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contactanos</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
