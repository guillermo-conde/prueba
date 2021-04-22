<!doctype html>
<html lang="en">
    <?=$this->load->view('includes/head', '', true) ?>
    <body>

            <!-- ========== Menu Izquierdo ========== -->
            <?=$this->load->view('includes/menu_izdo', '', true) ?>

            <!-- ========== Menu Superior ========== -->
            <?=$this->load->view('includes/menu_sup', '', true) ?>

            <!-- ========== Footer ========== -->
            <?=$this->load->view('includes/footer', '', true) ?>

            <!-- ========== Contenido ========== -->
            <?=$this->load->view('includes/contenido', '', true) ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">MODULO DOCUMENTOS</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <header class="masthead text-white text-center" style="background: url('bg-masthead.jpg')no-repeat center center;background-size: cover;">
        <div class="overlay" style="color: rgb(255,69,69);"><img src="/IMAGOTIPO-Universidad-Politécnica-de-Tlaxcala-WHITE.png" style="width: 1041px;"></div>
    </header>
    <section class="features-icons bg-light text-center">
        <div class="alert alert-success" role="alert" style="color: rgb(113,25,25);background-color: rgba(239,67,67,0.81);">
            <p>◀APARTADO DE ALTA DE DOCUMENTOS▶</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-user-follow m-auto text-primary" data-bs-hover-animate="pulse"></i><a href="aspirantes.html" style="width: 215px;line-height: 105px;"><strong>Aspirantes</strong></a></div>
                        <p class="lead mb-0">Apartado de alta de documentos a aspirantes a la carrera</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-graduation m-auto text-primary" data-bs-hover-animate="pulse"></i><a href="administrativos.html" style="width: 215px;line-height: 105px;"><strong>Docentes y administrativos</strong></a></div>
                        <h3></h3>
                        <p class="lead mb-0">Apartado para alta de documentos de docentes y administrativos.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-user m-auto text-primary" data-bs-hover-animate="pulse"></i><a href="alumnos1.html" style="width: 215px;line-height: 105px;"><strong>Alumnos</strong></a></div>
                        <h3></h3>
                        <p class="lead mb-0">Apartado para alumnos que ya estan inscritos en algun programa de ingenieria&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="showcase"></section>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bs-init.js"></script>
    <script id="bs-live-reload" data-sseport="50914" data-lastchange="1614703563168" src="/js/livereload.js"></script>
</body>

<?=$this->load->view('includes/base_js', '', true) ?>
</html>
