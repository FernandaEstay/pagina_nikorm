<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title></title>
		<link rel="stylesheet" href ="{{ asset('plugins/bootstrap/template-assets/bootstrap-assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href ="{{ asset('plugins/bootstrap/template-assets/index.html')}}">


    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>RISE-Multipurpose Html Template</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Css -->
    <link href="{{ asset ('plugins/bootstrap/bootstrap-assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Style -->
    <link href="{{ asset ('plugins/bootstrap/template-assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset ('plugins/bootstrap/template-assets/plugins/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{ asset ('plugins/bootstrap/template-assets/plugins/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{ asset ('plugins/bootstrap/template-assets/plugins/Lightbox/dist/css/lightbox.css')}}" rel="stylesheet">
    <link href="{{ asset ('plugins/bootstrap/template-assets/plugins/Icons/et-line-font/style.css')}}" rel="stylesheet">
    <link href="{{ asset ('plugins/bootstrap/template-assets/plugins/animate.css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset ('plugins/bootstrap/template-assets/css/main.css')}}" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
    <section class="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset ('plugins/bootstrap/template-assets/img/logo/logo.png')}}" class="img-responsive" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="#owl-hero" class="page-scroll">Inicio</a></li>
                            <li><a href="#services" class="page-scroll">Servicios</a></li>
                            <li><a href="#portfolio" class="page-scroll">Trabajos</a></li>
                            <li><a href="#testimonials" class="page-scroll">Contacto</a></li>
                        </ul>
                    </div>
                    <!--
                    <div class="social-media hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                    -->
                </div>
            </div>
        </nav>
        <div id="owl-hero" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url({{ asset ('plugins/bootstrap/template-assets/img/sliders/Slide.jpg')}})">
                <div class="caption">
                    <h6><span>Mantenciones Generales</span></h6>
                    <h1><span>NIKOLASRM</span><br>Mantenciones</h1>
                    <!--<a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>-->
                </div>
            </div>
            <div class="item" style="background-image: url({{ asset ('plugins/bootstrap/template-assets/img/sliders/Slide2.jpg')}})">
                <div class="caption">
                    <h6><span>Mantenciones Generales</span></h6>
                    <h1><span>NIKOLASRM </span><br>Mantenciones</h1>
                    <!--<a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>-->
                </div>
            </div>
            <div class="item" style="background-image: url({{ asset ('plugins/bootstrap/template-assets/img/sliders/Slide3.jpg')}})">
                <div class="caption">
                    <h6><span>Mantenciones Generales</span></h6>
                    <h1><span>NIKOLASRM </span><br>Mantenciones</h1>
                    <!--<a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>-->
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome
	============================================= -->
    <section id="welcome">
        <div class="container">
            <h2>NIKOLASRM <span>Mantenciones</span></h2>
            <hr class="sep">
            <p>Somos una empresa dedicada a la mantención de edificios, empresas y viviendas en general.<br> Con años de experiencia en el área, para resolver todos sus <b>problemas o necesidades.</b></p>
            <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="{{ asset ('plugins/bootstrap/template-assets/img/welcome/logo.jpg')}}" alt="logo">
        </div>
    </section>

    <!-- Services
	============================================= -->
    <section id="services">
        <div class="container">
            <h2>Lo que hacemos</h2>
            <hr class="light-sep">
            <p>Tus ideas, nuestra solución</p>
            <div class="services-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-lightbulb"></span></div>
                        <div class="media-body">
                            <h3>Electricidad</h3>
                            <p>Industrial y domiciliaria, mantención y reparación de tableros y proyectos de iluminación de distintos tipos: led, incandecente, etc.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-mobile"></span></div>
                        <div class="media-body">
                            <h3>Seguridad</h3>
                            <p>Sitófono, video porteros, cámaras de circuitos cerrados usable en forma remota, cercos eléctricos, concertina, puntos de red y voz.</p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-compass"></span></div>
                        <div class="media-body">
                            <h3>Gasfitería</h3>
                            <p>Instalaciones sanitarias, mantención y destape de alcantarillado, ya sea, con barilla o maquinaria. Instalación de redes de agua en cobre, PVC hidráulico, termo fusión, redes de incendio, etc.</p>
                        </div>

                    </div>

                    <div class="row wow fadeInUp" data-wow-delay=".6s">
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-adjustments"></span></div>
                            <div class="media-body">
                                <h3>Pintura</h3>
                                <p>En edificios, casas, departamentos, oficinas y empresas en general, en diferentes materiales como: esmalte al agua, latex al agua, pinturas al aceite, oleo o esmalte sintético, etc. En diferentes técnicas (rodillo, pistola,etc).</p>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-tools"></span></div>
                            <div class="media-body">
                                <h3>Carpintería</h3>
                                <p>En diferentes materiales como: aluminio, madera, estructuras metálicas, etc. Tales como: Ventanales, cierres, tabiquería (en aluminio), covertizos, puertas, portones, etc.</p>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-wallet"></span></div>
                            <div class="media-body">
                                <h3>Otros</h3>
                                <p>Como instalación de piso flotante, papel mural, piso vinílico, cerámicos, porcelanato.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio
	============================================= -->
    <section id="portfolio">
        <div class="container-fluid">
            <h2>Nuestro Trabajo</h2>
            <hr class="sep">
            <p>La solución para ti</p>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a class="portfolio-box" href="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/1.jpg')}}" data-lightbox="image-1" data-title="Fabricacion de grada e instalación de porcelanato">
                        <img src="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/1.jpg')}}" class="img-responsive" alt="1">
                         <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Otros
                                </div>
                                <div class="project-name">
                                    Grada y Porcelanato
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/2.jpg')}}" class="portfolio-box" data-lightbox="image-2" data-title="Fabricación de muebles a medida">
                        <img src="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/2.jpg')}}" class="img-responsive" alt="2">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Carpintería
                                </div>
                                <div class="project-name">
                                    Muebles
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/3.jpg')}}" class="portfolio-box" data-lightbox="image-3" data-title="Instalación de cerco eléctrico">
                        <img src="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/3.jpg')}}" class="img-responsive" alt="3">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Electricidad
                                </div>
                                <div class="project-name">
                                    Cerco eléctrico
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/4.jpg')}}" class="portfolio-box" data-lightbox="image-4" data-title="Instalación de tablero eléctrico de automatización">
                        <img src="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/4.jpg')}}" class="img-responsive" alt="4">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Electricidad
                                </div>
                                <div class="project-name">
                                    Tablero eléctrico de automatización
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/5.jpg')}}" class="portfolio-box" data-lightbox="image-5" data-title="Escalera metálica">
                        <img src="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/5.jpg')}}" class="img-responsive" alt="5">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Estructuras metálicas
                                </div>
                                <div class="project-name">
                                    Escalera metálica
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/6.jpg')}}" class="portfolio-box" data-lightbox="image-6" data-title="Instalación de cámaras de CCTV">
                        <img src="{{ asset ('plugins/bootstrap/template-assets/img/portfolio/6.jpg')}}" class="img-responsive" alt="6">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Seguridad
                                </div>
                                <div class="project-name">
                                    Cámaras de CCTV
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

   
    <!-- Testimonials
	============================================= -->
    <section id="testimonials">
        <div class="container">
            <h2>Nuestros clientes</h2>
            <hr class="light-sep">
            <div id="owl-testi" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5> Hemos trabajado al servicio de empresas destacadas a nivel nacional, entre las que se encuentra: la Viña Concha y Toro, el Hotel Sheraton, la ilustre Municipalidad de Peñalolén, Instituto Nacional de Derechos Humanos.
                         <br><span>NIKOLASRM Mantenciones</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5> Hemos trabajado al servicio de empresas destacadas a nivel nacional, entre las que se encuentra: Centro de formación técnica DUOC-UC, Comunidad y edificio Manuel Montt 111, Comunidad y edificio Antonio Bellet Plaza.<br><span>NIKOLASRM Mantenciones</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
                <div class="item">
                    <div class="quote">
                        <i class="fa fa-quote-left left fa-2x"></i>
                        <h5>Hemos trabajado al servicio de empresas destacadas a nivel nacional, entre las que se encuentra: Hospital Santiago Oriente Luis Tisné Brousse, entre otras... <br><span>NIKOLASRM Mantenciones</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
     Contact Us
	============================================= -->
    <!--
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <hr class="sep">
            <p>Get In Touch</p>
            <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                    </div>
                    <a href="#" class="btn-block">Send</a>
                </form>
            </div>
        </div>
    </section> -->
    <!-- Google Map
	============================================= -->
    <!-- <div id="map"></div> -->
    <!-- Footer
	============================================= -->
    <footer>
        <div class="container">
            <h6>NikolasRM Mantenciones</h6>
                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
            </div>
            <h6>Dirección: Calle Rengo #10325, El Bosque</h6>
            <h6>Contacto: +56 9 858 40 982</h6>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset ('plugins/bootstrap/template-assets/bootstrap-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('plugins/bootstrap/template-assets/js/custom.js')}}"></script>
    <!-- JS PLUGINS -->
    <script src="{{ asset ('plugins/bootstrap/template-assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('plugins/bootstrap/template-assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset ('plugins/bootstrap/template-assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset ('plugins/bootstrap/template-assets/plugins/countTo/jquery.countTo.js')}}"></script>
    <script src="{{ asset ('plugins/bootstrap/template-assets/plugins/inview/jquery.inview.min.js')}}"></script>
    <script src="{{ asset ('plugins/bootstrap/template-assets/plugins/Lightbox/dist/js/lightbox.min.js')}}"></script>
    <script src="{{ asset ('plugins/bootstrap/template-assets/plugins/WOW/dist/wow.min.js')}}"></script>
    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</body>

</html>