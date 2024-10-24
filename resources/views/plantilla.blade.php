@include('head')
    <!--NAVBAR 2-->
    <section>
        <nav class="navbar navbar-expand-lg" style="background-color: #3e602d;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"></a>
                <img src="{{ asset('src/logo.jpg') }}" alt="Imagen" style="width: 100px; border-radius: 100%;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" style="background-color:#f4fcc6;">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="mailto:ec.tictak@gmail.com" role="button" style="color: #f4fcc6;">
                                Contáctanos
                            </a>                           
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: #f4fcc6;">
                                Menú
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('vegetariano')}}">Vegetariano</a></li>
                                <li><a class="dropdown-item" href="{{route('gourmet')}}">Gourmet</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <a href="{{route('listaProductos')}}" class="btn btn-outline-success" type="submit" style="color: #f4fcc6;">Administrar productos</a>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <!--INICIO-->
    <section class="section1" id="inicio">
        <div>
            <img src="{{ asset('src/ENSALADA.jpg') }}" alt="IMAGEN PRINCIPAL">
        </div>
        <div>
            <h1>ENSALADA RUSA</h1>
            <p>Incluye zanahorias, arvejas y papas frescas, listas para preparar y cocinar. 2 porciones aproximadamente.
            </p>
            <p>¡Una deliciosa opción para acompañar tus comidas o como plato principal!</p>
            <ul>
                <li>Ingredientes frescos y de alta calidad.</li>
                <li>Fácil de preparar en pocos minutos.</li>
                <li>Perfecta para compartir en familia o con amigos.</li>
            </ul>
           <a href="https://wa.me/573016882553" class="btn btn-custom">Comprar Ahora</a>


        </div>
    </section>

    <section class="section2">
        <div>
            <h1>Menú</h1>
        </div>
        <section style="display: flex; justify-content: space-between;">
            <div id="carouselExample" class="carousel slide"
                style="width: 100%; height: 100%; margin-left: 10%; margin-right: 5%;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('src//carousel9.jpeg') }}" class="d-block w-100" alt="imagen carousel">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('src//carousel4.jpeg') }}" class="d-block w-100" alt="imagen carousel">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('src//carousel3.jpeg') }}" class="d-block w-100" alt="imagen carousel">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('src//carousel6.jpeg') }}" class="d-block w-100" alt="imagen carousel">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div style="background: #f4fcc6; margin-right: 10%;">
                <h1>¿Quieres disfrutar de comidas deliciosas sin sacrificar tiempo ni sabor? </h1>
                <p>Descubre la solución
                    perfecta: nuestras comidas precocidas de alta calidad. Con ingredientes frescos y preparadas con
                    pasión, nuestras opciones culinarias te brindarán una experiencia gastronómica excepcional sin
                    esfuerzo. ¡Ahorra tiempo en la cocina y disfruta de una alimentación sabrosa y saludable hoy mismo!
                    Tu paladar te lo agradecerá.</p>
            </div>
        </section>
    </section>
    
    <section class="two-column-section" id="Nosotros">
        <h1 class="py-5">Nuestra Historia: Innovación y Pasión por la Comida</h1>
        <div class="columns-container">
            <div class="left-column" >
                <img src="{{ asset('src/carousel3.jpeg')}}" alt="Imagen Izquierda" class="small-image my-5">
                <p>En TIKTAK, nuestra pasión es la comida. Somos una marca que transforma frutas,verduras y proteinas.
                    Nuestros productos están listos para preparar tus mejores recetas,cortamos,marinamos y empacamos en porciones individuales.
                    Optimizamos tus preparaciones y reducimos los tiempos de preparación</p>
            </div>
            <div class="right-column">
                <img src="{{ asset ('src/carousel9.jpeg')}}" alt="Imagen Derecha" class="small-image my-5">
                <p>Creemos que el tiempo es un recurso valioso, y cada bocado de nuestros productos es una inversión en una vida más saludable y equilibrada.
                 Simplificamos la alimentación sin comprometer la excelencia,porque sabemos que,cuando el tiempo se vuelve más accesible,las oportunidades se multiplican.
                  El reloj no se detiene,pero con Tic Tak, tienes el control </p>
            </div>
        </div>
    </section>
    @include('footer')
