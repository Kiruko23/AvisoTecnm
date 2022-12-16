@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')

    <!-- OFFCANVAS -->
    <div class="offcanvas offcanvas-end" id="demo">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">Carreras</h1>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <p> <a
                    href="http://chetumal.tecnm.mx/index.php/oferta-educativa/licenciaturas-sistema-escolarizado/licenciatura-en-administracion">Licenciatura
                    en Administración</a> </p>
            <p> <a
                    href="http://chetumal.tecnm.mx/index.php/oferta-educativa/licenciaturas-sistema-escolarizado/licenciatura-en-biologia">Licenciatura
                    en Biología</a> </p>
            <p> <a
                    href="http://chetumal.tecnm.mx/index.php/oferta-educativa/licenciaturas-sistema-escolarizado/contador-publico">Contador
                    Público</a> </p>
            <p> <a
                    href="http://chetumal.tecnm.mx/index.php/oferta-educativa/licenciaturas-sistema-escolarizado/arquitectura">Arquitectura</a>
            </p>
            <p> <a
                    href="http://chetumal.tecnm.mx/index.php/oferta-educativa/licenciaturas-sistema-escolarizado/ingenieria-civil">Ingeniería
                    Civil</a> </p>
            <p> <a
                    href="http://chetumal.tecnm.mx/index.php/oferta-educativa/licenciaturas-sistema-escolarizado/ingenieria-en-administracion">Ingeniería
                    en Administración</a> </p>
            <p> <a
                    href="http://chetumal.tecnm.mx/index.php/oferta-educativa/licenciaturas-sistema-escolarizado/ingenieria-electrica">Ingeniería
                    Eléctrica</a> </p>
            <p> <a
                    href="http://chetumal.tecnm.mx/index.php/oferta-educativa/licenciaturas-sistema-escolarizado/ingenieria-en-gestion-empresarial">Ingeniería
                    en Gestión Empresarial</a> </p>
            <p> <a
                    href="http://chetumal.tecnm.mx/index.php/oferta-educativa/licenciaturas-sistema-escolarizado/ingenieria-en-sistemas-computacionales">Ingeniería
                    en Sistemas Computacionales</a> </p>
            <p> <a
                    href="http://chetumal.tecnm.mx/index.php/oferta-educativa/licenciaturas-sistema-escolarizado/ingenieria-tecnologias-de-la-informacion-y-comunicaciones">Ingeniería
                    en Tecnologías de la Información y Comunicaciones</a> </p>
        </div>
    </div>
    <!-- FLEX -->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                <path
                    d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                <path
                    d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
            </svg> Carreras
        </button>
    </div>



    <h2 class="text-center">Instituto Tecnológico de Chetumal</h2>
    <!-- CARD -->
    <div class="card" style="width:100%">
        <img class="card-img-top" src="{{ asset('/img/tecnm.png') }}" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title text-center">“Cultura, ciencia y tecnología para la superación de México”</h4>
            <div id="accordion">

                <div class="card">
                    <div class="card-header text-center">
                        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                            Información
                        </a>
                    </div> <!-- COLLAPSE -->
                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                            Formar integralmente profesionales de alto desempeño que contribuyan al desarrollo sustentable
                            del Estado y del País, dentro del proceso de globalización con base en la mejora continua.
                            <br><br>
                            Estar enterado de los avisos de la institución no sólo beneficia la experiencia universitaria
                            del alumno sino también logra que más estudiantes se inscriban a una universidad y esten
                            enterados de los avisos.
                        </div>
                    </div>
                </div>
            </div>
            <br>






            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/img/aviso1.png') }}" alt="aviso1" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/aviso2.png') }}" alt="aviso2" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/aviso3.png') }}" alt="aviso3" class="d-block w-100">
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev text-secondary" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next text-secondary" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>


<br>



            <!-- GRID XSmall -->
            <div class="d-grid gap-2 col-4 mx-auto">
                <!-- UTILITIES -->
                <!-- BUTTON GROUP -->
                <div class="btn-group">
                    <a type="button" href="https://www.tecnm.mx/" class="btn btn-outline-primary">TECNM</a>
                    <a type="button" href="http://www.itchetumal.edu.mx/" class="btn btn-outline-primary">IT Chetumal</a>
                    <a type="button" href="http://escolar.chetumal.tecnm.mx/moodle/"
                        class="btn btn-outline-primary">Moodle</a>
                </div>
            </div>
            <br>
        </div>
    </div>
    <br>


@endsection
