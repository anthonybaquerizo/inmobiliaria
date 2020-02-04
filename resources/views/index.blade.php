<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/boostrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>Inicio::Conecta Inmobiliaria</title>
</head>
<body>
<div class="position-relative w-10 h-100">
    <div class="position-absolute header-banners bg-transparent p-2">
        <div class="w-100 d-flex justify-content-between align-items-center">
            <img src="data:image/png;base64,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"
                 class="logo"
                 alt="Logo">

            <div class="d-flex">
                <a href="#">
                    <img src="https://icons.iconarchive.com/icons/danleech/simple/256/facebook-icon.png"
                         class="social rounded-circle"
                         alt="Facebook">
                </a>
            </div>
        </div>
    </div>
    <div id="carouselBanners" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner carousel-inner-responsive w-100">
            <div class="carousel-item active w-100 h-100 bg-transparent">
                <img src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/inmobiliarias-arequipa.jpg"
                     class="d-block mw-100 mh-100 h-100 w-100 overflow-hidden bg-transparent img-fluid" alt="...">

                <div class="carousel-caption d-none d-md-block">
                    <h5>Titulo de Banner</h5>

                    <p>Descripción del banner</p>
                </div>
            </div>
            <div class="carousel-item w-100 h-100 bg-transparent">
                <img src="https://www.inmobiliariaucayali.com/wp-content/uploads/2017/11/Inmobiliaria-Ucayali-Homes-banner-01.jpg"
                     class="d-block mw-100 mh-100 h-100 w-100 overflow-hidden bg-transparent img-fluid" alt="...">

                <div class="carousel-caption d-none d-md-block">
                    <h5>Titulo de Banner 2</h5>

                    <p>Descripción del banner 2</p>
                </div>
            </div>
            <div class="carousel-item w-100 h-100 bg-transparent">
                <img src="https://cypes.grupoeurohispana.com/img/subcat/10/subcat10-foto1.jpg"
                     class="d-block mw-100 mh-100 h-100 w-100 overflow-hidden bg-transparent img-fluid" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselBanners" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselBanners" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<header class="container-md">
    <nav class="navbar navbar-expand-sm navbar-light bg-light border">
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Venta
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Proyecto</a>
                        <a class="dropdown-item" href="#">Entrega Inmediata</a>
                        <a class="dropdown-item" href="#">Segundo uso</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alquiler
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Proyecto</a>
                        <a class="dropdown-item" href="#">Entrega Inmediata</a>
                        <a class="dropdown-item" href="#">Segundo uso</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Noticias</a>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</header>
<main class="container-md">
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="mt-2" >
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active p-2" id="nav-home-tab" data-toggle="tab" href="#nav-search"
                       role="tab"
                       aria-controls="nav-home" aria-selected="true">
                        <i class="fa fa-search"></i> Busqueda
                    </a>
                    <a class="nav-item nav-link p-2" id="nav-profile-tab" data-toggle="tab" href="#nav-code" role="tab"
                       aria-controls="nav-profile" aria-selected="false">
                        <i class="fa fa-code"></i> Código
                    </a>
                </div>
                <div class="tab-content border border-top-0" id="nav-tabContent">
                    <div class="tab-pane fade show active p-2" id="nav-search" role="tabpanel"
                         aria-labelledby="nav-home-tab">
                        <div class="form-group">
                            <select id="search_type" class="custom-select" title="">
                                <option value="">Tipo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="search_district" class="custom-select" title="">
                                <option value="">Distrito</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="search_project" class="custom-select" title="">
                                <option value="">Proyecto</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="search_bedrooms">
                                Dormitorios
                            </label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-light">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="number" class="form-control text-right"
                                       id="search_bedrooms" min="0"
                                       value="">

                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-light">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="search_bedrooms">
                                Valor de Venta
                            </label>
                            <table class="" border="0" cellspacing="0">
                                <tr>
                                    <td rowspan="3" class="position-relative">
                                        <select id="search_currency" title=""
                                                style="width: 5rem;"
                                                class="custom-select custom-select-lg h-100">
                                            <option value="1" selected>S/</option>
                                            <option value="2">USD</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Max.</span>
                                            </div>
                                            <input type="number" class="form-control text-right"
                                                   id="search_bedrooms" min="0"
                                                   value="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Min.</span>
                                            </div>
                                            <input type="number" class="form-control text-right"
                                                   id="search_bedrooms" min="0"
                                                   value="">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <button type="button" role="button" class="btn btn-primary btn-block">
                            <i class="fa fa-search"></i> Buscar
                        </button>
                    </div>
                    <div class="tab-pane fade p-2" id="nav-code" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   id="send_code" title=""
                                   placeholder="Ingrese su código"
                                   value="">
                        </div>
                        <button type="button" role="button" class="btn btn-primary btn-block">
                            <i class="fa fa-search"></i> Buscar
                        </button>
                    </div>
                </div>
            </div>
            <div class="accordion d-xl-block d-lg-block d-md-block d-sm-block d-none" id="accordionFeatured">
                <div class="card">
                    <div class="card-header p-0" id="headingOne">
                        <button class="btn btn-light btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                            <i class="fa fa-calendar-alt"></i> Destacados
                        </button>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                         data-parent="#accordionFeatured">
                        <div class="card-body p-0">
                            <ul class="list-unstyled mb-0">
                                <li class="media border-bottom p-2">
                                    <div class="content-img-featured">
                                        <img src="data:image/jpeg;base64,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"
                                             class="h-100 w-auto mw-100 mh-100 overflow-hidden bg-transparent img-fluid"
                                             alt="...">
                                    </div>
                                    <div class="media-body pl-2">
                                        <ul class="list-unstyled">
                                            <li class="text-muted">
                                                Departamento
                                            </li>
                                            <li class="font-weight-normal">
                                                La Perla
                                            </li>
                                            <li class="font-weight-bold text-left">
                                                S/ 2,400.00
                                            </li>
                                        </ul>

                                    </div>
                                </li>
                                <li class="media border-bottom p-2">
                                    <div class="content-img-featured">
                                        <img src="data:image/jpeg;base64,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"
                                             class="h-100 w-auto mw-100 mh-100 overflow-hidden bg-transparent img-fluid"
                                             alt="...">
                                    </div>
                                    <div class="media-body pl-2">
                                        <ul class="list-unstyled">
                                            <li class="text-muted">
                                                Departamento
                                            </li>
                                            <li class="font-weight-normal">
                                                La Plata
                                            </li>
                                            <li class="font-weight-bold text-left">
                                                S/ 2,400.00
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="d-flex flex-column position-relative rounded shadow mt-4">
                        <div class="position-absolute" style="z-index: 1000; top: 10px; right: 0">
                            <div class="bg-warning w-auto px-2 text-secondary font-weight-bold">
                                S/ 2,100.00
                            </div>
                        </div>
                        <div id="carouselProduct01" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselProduct01" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselProduct01" data-slide-to="1"></li>
                                <li data-target="#carouselProduct01" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner w-100" style="height: 10rem">
                                <div class="carousel-item active w-100 h-100 bg-transparent">
                                    <img src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/inmobiliarias-arequipa.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                                <div class="carousel-item w-100 h-100 bg-transparent">
                                    <img src="https://www.inmobiliariaucayali.com/wp-content/uploads/2017/11/Inmobiliaria-Ucayali-Homes-banner-01.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                                <div class="carousel-item w-100 h-100 bg-transparent">
                                    <img src="https://cypes.grupoeurohispana.com/img/subcat/10/subcat10-foto1.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-flex flex-column p-2">
                            <div class="font-weight-bold">
                                <p class="mb-1">Titulo del Departamento</p>
                            </div>
                            <div class="font-weight-normal">
                                <p class="mb-1 text-muted">
                                    <i class="fa fa-map-marked-alt"></i> El Olivar - San Isidro
                                </p>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-home"></i>
                                        <span class="mw-100 text-truncate">4 dormi.e qe ewq</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-car"></i>
                                        <span class="mw-100 text-truncate">2 baños</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-check"></i>
                                        <span class="mw-100 text-truncate">3 piso</span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-check-circle"></i> Lugar
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-map-marked-alt"></i> Plano
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-eye"></i> Ver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="d-flex flex-column position-relative rounded shadow mt-4">
                        <div class="position-absolute" style="z-index: 1000; top: 10px; right: 0">
                            <div class="bg-warning w-auto px-2 text-secondary font-weight-bold">
                                S/ 2,100.00
                            </div>
                        </div>
                        <div id="carouselProduct01" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselProduct01" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselProduct01" data-slide-to="1"></li>
                                <li data-target="#carouselProduct01" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner w-100" style="height: 10rem">
                                <div class="carousel-item active w-100 h-100 bg-transparent">
                                    <img src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/inmobiliarias-arequipa.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                                <div class="carousel-item w-100 h-100 bg-transparent">
                                    <img src="https://www.inmobiliariaucayali.com/wp-content/uploads/2017/11/Inmobiliaria-Ucayali-Homes-banner-01.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                                <div class="carousel-item w-100 h-100 bg-transparent">
                                    <img src="https://cypes.grupoeurohispana.com/img/subcat/10/subcat10-foto1.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-flex flex-column p-2">
                            <div class="font-weight-bold">
                                <p class="mb-1">Titulo del Departamento</p>
                            </div>
                            <div class="font-weight-normal">
                                <p class="mb-1 text-muted">
                                    <i class="fa fa-map-marked-alt"></i> El Olivar - San Isidro
                                </p>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-home"></i>
                                        <span class="mw-100 text-truncate">4 dormi.e qe ewq</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-car"></i>
                                        <span class="mw-100 text-truncate">2 baños</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-check"></i>
                                        <span class="mw-100 text-truncate">3 piso</span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-check-circle"></i> Lugar
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-map-marked-alt"></i> Plano
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-eye"></i> Ver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="d-flex flex-column position-relative rounded shadow mt-4">
                        <div class="position-absolute" style="z-index: 1000; top: 10px; right: 0">
                            <div class="bg-warning w-auto px-2 text-secondary font-weight-bold">
                                S/ 2,100.00
                            </div>
                        </div>
                        <div id="carouselProduct01" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselProduct01" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselProduct01" data-slide-to="1"></li>
                                <li data-target="#carouselProduct01" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner w-100" style="height: 10rem">
                                <div class="carousel-item active w-100 h-100 bg-transparent">
                                    <img src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/inmobiliarias-arequipa.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                                <div class="carousel-item w-100 h-100 bg-transparent">
                                    <img src="https://www.inmobiliariaucayali.com/wp-content/uploads/2017/11/Inmobiliaria-Ucayali-Homes-banner-01.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                                <div class="carousel-item w-100 h-100 bg-transparent">
                                    <img src="https://cypes.grupoeurohispana.com/img/subcat/10/subcat10-foto1.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-flex flex-column p-2">
                            <div class="font-weight-bold">
                                <p class="mb-1">Titulo del Departamento</p>
                            </div>
                            <div class="font-weight-normal">
                                <p class="mb-1 text-muted">
                                    <i class="fa fa-map-marked-alt"></i> El Olivar - San Isidro
                                </p>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-home"></i>
                                        <span class="mw-100 text-truncate">4 dormi.e qe ewq</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-car"></i>
                                        <span class="mw-100 text-truncate">2 baños</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-check"></i>
                                        <span class="mw-100 text-truncate">3 piso</span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-check-circle"></i> Lugar
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-map-marked-alt"></i> Plano
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-eye"></i> Ver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="d-flex flex-column position-relative rounded shadow mt-4">
                        <div class="position-absolute" style="z-index: 1000; top: 10px; right: 0">
                            <div class="bg-warning w-auto px-2 text-secondary font-weight-bold">
                                S/ 2,100.00
                            </div>
                        </div>
                        <div id="carouselProduct01" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselProduct01" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselProduct01" data-slide-to="1"></li>
                                <li data-target="#carouselProduct01" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner w-100" style="height: 10rem">
                                <div class="carousel-item active w-100 h-100 bg-transparent">
                                    <img src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/inmobiliarias-arequipa.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                                <div class="carousel-item w-100 h-100 bg-transparent">
                                    <img src="https://www.inmobiliariaucayali.com/wp-content/uploads/2017/11/Inmobiliaria-Ucayali-Homes-banner-01.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                                <div class="carousel-item w-100 h-100 bg-transparent">
                                    <img src="https://cypes.grupoeurohispana.com/img/subcat/10/subcat10-foto1.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-flex flex-column p-2">
                            <div class="font-weight-bold">
                                <p class="mb-1">Titulo del Departamento</p>
                            </div>
                            <div class="font-weight-normal">
                                <p class="mb-1 text-muted">
                                    <i class="fa fa-map-marked-alt"></i> El Olivar - San Isidro
                                </p>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-home"></i>
                                        <span class="mw-100 text-truncate">4 dormi.e qe ewq</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-car"></i>
                                        <span class="mw-100 text-truncate">2 baños</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-check"></i>
                                        <span class="mw-100 text-truncate">3 piso</span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-check-circle"></i> Lugar
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-map-marked-alt"></i> Plano
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-eye"></i> Ver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="d-flex flex-column position-relative rounded shadow mt-4">
                        <div class="position-absolute" style="z-index: 1000; top: 10px; right: 0">
                            <div class="bg-warning w-auto px-2 text-secondary font-weight-bold">
                                S/ 2,100.00
                            </div>
                        </div>
                        <div id="carouselProduct01" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselProduct01" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselProduct01" data-slide-to="1"></li>
                                <li data-target="#carouselProduct01" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner w-100" style="height: 10rem">
                                <div class="carousel-item active w-100 h-100 bg-transparent">
                                    <img src="https://www.mercadonegro.pe/wp-content/uploads/2020/01/inmobiliarias-arequipa.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                                <div class="carousel-item w-100 h-100 bg-transparent">
                                    <img src="https://www.inmobiliariaucayali.com/wp-content/uploads/2017/11/Inmobiliaria-Ucayali-Homes-banner-01.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                                <div class="carousel-item w-100 h-100 bg-transparent">
                                    <img src="https://cypes.grupoeurohispana.com/img/subcat/10/subcat10-foto1.jpg"
                                         class="d-block w-100 h-100 mh-100 mw-100 overflow-hidden bg-transparent img-fluid"
                                         style="border-radius: 5px 5px 0 0"
                                         alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-flex flex-column p-2">
                            <div class="font-weight-bold">
                                <p class="mb-1">Titulo del Departamento</p>
                            </div>
                            <div class="font-weight-normal">
                                <p class="mb-1 text-muted">
                                    <i class="fa fa-map-marked-alt"></i> El Olivar - San Isidro
                                </p>
                            </div>
                            <div class="row mb-1">
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-home"></i>
                                        <span class="mw-100 text-truncate">4 dormi.e qe ewq</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-car"></i>
                                        <span class="mw-100 text-truncate">2 baños</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex flex-column align-items-center m-1">
                                        <i class="fa fa-check"></i>
                                        <span class="mw-100 text-truncate">3 piso</span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-check-circle"></i> Lugar
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-map-marked-alt"></i> Plano
                                </button>
                                <button type="button" class="btn btn-light">
                                    <i class="fa fa-eye"></i> Ver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<section class="w-100 my-2 bg-secondary p-4">
    <div class="row" >
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" >
            <a href="#" class="btn btn-light btn-lg my-2 btn-block" >
                <div class="d-flex flex-column" >
                    <i class="fa fa-map" style="font-size: 5rem;" ></i>
                    <span class="" >Registre su inmueble</span>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" >
            <a href="#" class="btn btn-light btn-lg my-2 btn-block" >
                <div class="d-flex flex-column" >
                    <i class="fa fa-home" style="font-size: 5rem;" ></i>
                    <span class="" >Solicite un inmuble</span>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" >
            <a href="#" class="btn btn-light btn-lg my-2 btn-block" >
                <div class="d-flex flex-column" >
                    <i class="fa fa-search" style="font-size: 5rem;" ></i>
                    <span class="" >Encuentre su inmueble</span>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12" >
            <a href="#" class="btn btn-light btn-lg my-2 btn-block" >
                <div class="d-flex flex-column" >
                    <i class="fa fa-calculator" style="font-size: 5rem;" ></i>
                    <span class="" >Simule su funcionamiento</span>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="container w-100 my-2 bg-white" >
    <div class="row" >
        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6 col-12" >
            <div class="d-xl-block d-lg-block d-md-block d-sm-block d-none" >
                <h1>Mapa</h1>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" >
            <div class="card" >
                <div class="card-header" >
                    <h3>Cotización</h3>
                </div>
                <div class="card-body" >
                    <div class="form-group" >
                        <label for="quote_type">
                            Tipo de Solicitud
                        </label>
                        <select id="quote_type" class="custom-select" >
                            <option value="1">Opción 1</option>
                            <option value="1">Opción 2</option>
                            <option value="1">Opción 3</option>
                            <option value="1">Opción 4</option>
                        </select>
                    </div>
                    <div class="form-group" >
                        <label for="quote_name">
                            Nombre Completo
                        </label>
                        <input type="text" class="form-control"
                               id="quote_name"
                               value="" >
                    </div>
                    <div class="row" >
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-12" >
                            <div class="form-group" >
                                <label for="quote_phone">
                                    Teléfono
                                </label>
                                <input type="number" class="form-control"
                                       id="quote_phone"
                                       value="" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-12" >
                            <div class="form-group" >
                                <label for="quote_cell_phone">
                                    Celular
                                </label>
                                <input type="number" class="form-control"
                                       id="quote_cell_phone"
                                       value="" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label for="quote_email">
                            Correo electrónico
                        </label>
                        <input type="text" class="form-control"
                               id="quote_email"
                               value="" >
                    </div>
                    <div class="form-group" >
                        <label for="quote_detail">
                            Comentario
                        </label>
                        <textarea id="quote_detail" rows="5" class="form-control" ></textarea>
                    </div>
                    <button type="button" class="btn btn-primary btn-block" >
                        <i class="fa fa-save" ></i> Enviar cotización
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-light" >
    <div class="container-fluid p-4" >
        <div class="row" >
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6" >
                <p class="text-left font-weight-bold mb-1" >
                    Enlaces
                </p>
                <table class="table table-sm" border="0" cellspacing="0" cellpadding="0" >
                    <tr>
                        <td class="text-left" >
                            <a href="#">
                                Nosotros
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left" >
                            <a href="#">
                                Proyectos
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left" >
                            <a href="#">
                                Noticias
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left" >
                            <a href="#">
                                Contacto
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 " >
                <p class="text-left font-weight-bold mb-1" >
                    Infomes
                </p>
                <table class="table table-sm" border="0" cellspacing="0" cellpadding="0" >
                    <tr>
                        <td class="text-center align-middle p-2 w-25" rowspan="3" >
                            <i class="fa fa-phone" ></i>
                        </td>
                        <td class="text-left text-muted w-75" >
                            Télefonos
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left w-75" >
                            (01) 9874-648
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left w-75" >
                            987654321
                        </td>
                    </tr>
                </table>
                <table class="table table-sm mt-2" border="0" cellspacing="0" cellpadding="0" >
                    <tr>
                        <td class="text-center align-middle p-2 w-25" rowspan="2" >
                            <i class="fa fa-mail-bulk" ></i>
                        </td>
                        <td class="text-left text-muted w-75" >
                            Emails
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left text-break w-25" >
                            contacto@miempresa.com
                        </td>
                    </tr>
                </table>
                <table class="table table-sm mt-2" border="0" cellspacing="0" cellpadding="0" >
                    <tr>
                        <td class="text-center align-middle p-2 w-25" rowspan="3" >
                            <i class="fa fa-map-marked" ></i>
                        </td>
                        <td class="text-left text-muted w-75" >
                            Dirección
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left text-break w-75" >
                            Dirección 1
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left text-break w-75" >
                            Dirección 2
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-5 col-sm-12 col-12" >
                <div class="d-flex justify-content-end align-items-center" >
                    <img src="data:image/png;base64,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"
                         class="logo"
                         alt="Logo">
                    <div class="social-media p-3" >
                        <i class="fa fa-cube" style="font-size: 2rem;" ></i>
                    </div>
                    <div class="social-media p-3" >
                        <i class="fa fa-cube" style="font-size: 2rem;" ></i>
                    </div>
                    <div class="social-media p-3" >
                        <i class="fa fa-cube" style="font-size: 2rem;" ></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 text-left border-top p-2" >
        Copyright © 2020 <a href="#">interfaza</a>. Todos los derechos reservados.
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('plugins/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('plugins/boostrap/js/popper.min.js') }}"></script>
<script src="{{ asset('plugins/boostrap/js/bootstrap.min.js') }}"></script>
</body>
</html>