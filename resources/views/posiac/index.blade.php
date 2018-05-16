<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Oxygen - One Page HTML Template | Themeum</title>
  <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/lightbox.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/main.css')}}" rel="stylesheet">
  <link id="css-preset" href="{{asset('asset/css/presets/preset1.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet">

  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  
  <!--[if lt IE 9]>
    <script src="{{asset('asset/js/html5shiv.js')}}"></script>
    <script src="{{asset('asset/js/respond.min.js')}}"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url({{asset('asset/images/slider/1.jpg')}})">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"style="font-size:60px;">Universidad de <span>Cundinamarca</span></h1>
            <h1 class="animated fadeInLeftBig"style="font-size:40px;">FACULTAD DE INGENIERÍA</h1>
            
            <hr width="50%">
            <h1 class="animated fadeInLeftBig" >Jornada de <span>creatividad e innovación</span></h1>
            
            <h1 class="animated fadeInLeftBig" style="font-size:40px;"><span>EACI</span>-2017 </h1>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Siguiente</a>
          </div>
        </div>
        <div class="item" style="background-image: url({{asset('asset/images/slider/2.jpg')}})">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Conferencias</h1>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Información</a>
          </div>
        </div>
        <div class="item" style="background-image: url({{asset('asset/images/slider/3.jpg')}})">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Talleres de creatividad</span></h1>
            
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Información</a>
          </div>
        </div>
        <div class="item" style="background-image: url({{asset('asset/images/slider/4.jpg')}})">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Llamado de <span>artículos</span></h1>
            <h1 class="animated fadeInLeftBig" style="font-size:40px;"><span>y</span></h1>
            <h1 class="animated fadeInLeftBig">presentación de <span>póster</span></h1>
            
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Información</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="{{asset('asset/images/logo.png')}}" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Registro de Actividades</a></li>
            <li class="scroll"><a href="#about-us">Descripción</a></li>
            <li class="scroll"><a href="#portfolio">Guía</a></li>
            <li class="scroll"><a href="#team">Agenda</a></li>
            <li class="scroll"><a href="#twitter">Eventos</a></li>
            <li class="scroll"><a href="#contact">Organizadores</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2><Strong>REGISTRO DE ACTIVIDADES</Strong></h2>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-microphone"></i>
            </div>
            <div class="service-info">
              <h3>Conferencias de expertos</h3>
              <p>Espacio diseñado y destinado para la comunidad estudiantil: estudiantes, docentes, investigadores y directivas; estas conferencias están orientadas a los temas de innovación, emprendimiento, generación de proyectos y otros enfoques del área que motivan y preparan hacia procesos de innovación.</p>
            </div>
            <a id="conf" href="javascript:;" class="btn btn-lg btn-primary">Ver conferencias</a>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-star"></i>
            </div>
            <div class="service-info">
              <h3>Talleres de creatividad (SCRUM, Processing y Minería de datos)</h3>
              <p>Talleres y retos cortos, diseñados para poner en práctica las temáticas abordadas en las conferencias y charlas. <Strong>A los estudiantes participantes se les dará un certificado emitido por la dirección del programa de ingeniería de sistemas</Strong></p>
            </div>
            <a id="act" href="javascript:;" class="btn btn-lg btn-primary">Ver actividades</a>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-flash"></i>
            </div>
            <div class="service-info">
              <h3>Llamado de artículos y presentación del póster</h3>
              <p>A patir del llamado de artículos se hará la presentación de ponencias y la exposición de los Poster, que son productos de los ptadroyectos de investigación, de los grupos pertenecientes a la Facultad de ingeniería y sus semilleros. Los arrtículos y pósters generados por los grupos se emplearán para la elaboración de las memorias del evento</p>
            </div>
            <a id="art" href="javascript:;" class="btn btn-lg btn-primary">Ver articulos</a>
          </div>

          <!-- Inicio Conferencias de expertos -->
          <div style="display: none;"  class="col-sm-4 wow fadeInUp conferencia" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-microphone"></i>
            </div>
            <div class="service-info">
              <h3>Conferencia 1</h3>
              <p>Día:  8 de septiembre</p>
              <p>Hora: 9:00am - 11:00am</p>
              <p>Tema: Por definir</p>
            </div>
            <button id="1" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal" data-target="#myModal">Inscribir</button>
          </div>

          <div style="display: none;"  class="col-sm-4 wow fadeInUp conferencia" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-microphone"></i>
            </div>
            <div class="service-info">
              <h3>Conferencia 2</h3>
              <p>Día:  8 de septiembre</p>
              <p>Hora: 2:00pm - 4:00pm</p>
              <p>Tema: Por definir</p>
            </div>
            <button id="2" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal" data-target="#myModal">Inscribir</button>
          </div>

          <div style="display: none;"  class="col-sm-4 wow fadeInUp conferencia" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-microphone"></i>
            </div>
            <div class="service-info">
              <h3>Conferencia 3</h3>
              <p>Día:  9 de septiembre</p>
              <p>Hora: 8:00am - 10:00am</p>
              <p>Tema: Por definir</p>
            </div>
            <button id="3" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal" data-target="#myModal">Inscribir</button>
          </div>

          <!-- Fin Conferencias de expertos -->
          <!-- Inicio Actividades -->
          <div style="display: none;"  class="col-sm-4 wow fadeInUp actividad" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-star"></i>
            </div>
            <div class="service-info">
              <h3>Actividad 1</h3>
              <p>Día:  8 de septiembre</p>
              <p>Hora: 10:00am - 1:00am</p>
              <p>Tema: SCRUM</p>
            </div>
            <button id="4" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal" data-target="#myModal">Inscribir</button>
          </div>

          <div style="display: none;"  class="col-sm-4 wow fadeInUp actividad" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-star"></i>
            </div>
            <div class="service-info">
              <h3>Actividad 2</h3>
              <p>Día:  8 de septiembre</p>
              <p>Hora: 12:00pm - 3:00pm</p>
              <p>Tema: Processing</p>
            </div>
            <button id="5" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal" data-target="#myModal">Inscribir</button>
          </div>

          <div style="display: none;"  class="col-sm-4 wow fadeInUp actividad" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-star"></i>
            </div>
            <div class="service-info">
              <h3>Actividad 3</h3>
              <p>Día:  9 de septiembre</p>
              <p>Hora: 8:00am - 11:00am</p>
              <p>Tema: Minería de datos</p>
            </div>
            <button id="6" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal" data-target="#myModal">Inscribir</button>
          </div>

          <div style="display: none;"  class="col-sm-4 wow fadeInUp actividad" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-star"></i>
            </div>
            <div class="service-info">
              <h3>Actividad 1 (replica)</h3>
              <p>Día:  9 de septiembre</p>
              <p>Hora: 9:00am - 12:00pm</p>
              <p>Tema: SCRUM (Replica)</p>
            </div>
            <button id="7" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal" data-target="#myModal">Inscribir</button>
          </div>

          <div style="display: none;"  class="col-sm-4 wow fadeInUp actividad" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-star"></i>
            </div>
            <div class="service-info">
              <h3>Actividad 2 (Replica)</h3>
              <p>Día:  9 de septiembre</p>
              <p>Hora: 9:00am - 12:00pm</p>
              <p>Tema: Processing (Replica)</p>
            </div>
            <button id="8" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal" data-target="#myModal">Inscribir</button>
          </div>
          <!-- Final Actividades -->
          <!-- inicio Ponencias -->

          <div style="display: none;"  class="col-sm-4 wow fadeInDown articulo" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-flash"></i>
            </div>
            <div class="service-info">
              <h3>Llamado de artículos y presentación del póster</h3>
              <p>Día:  9 de septiembre</p>
              <p>Hora: 10:00am - 12:00pm</p>
              <p>Tema: Por definir</p>
              <p>Descargue las plantillas en los siguientes links</p>
              <a href="{{asset('asset/plantilla.ppt')}}">Póster</a> - <a href="{{asset('asset/paper.doc')}}">Paper</a>
              <br>
            </div>
            <button id="9" type="button" class="btn btn-lg btn-primary btn-action" data-toggle="modal" data-target="#myModal">Inscribir</button>
          </div>

        </div>
      </div>
    </div>
  </section><!--/#services-->
  <section id="about-us" class="parallax" >
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2><Strong>Descripción</Strong></h2>
            <p>Dentro de los núcleos de formación de los programas de la facultad de ingeniería no
              existe uno, dedicado al desarrollo de la creatividad como elemento de aporte al
              proceso de formación profesional de los futuros ingenieros, esta falencia de los
              programas de formación profesional de la facultad, deriva en situaciones
              problemáticas que se evidencian al interior del aula de clase, en la estructuración de
              proyectos de aula y asimismo en la estructuración de proyectos de grado, que sean
              novedosos, que aborden situaciones problemáticas del entorno y en la misma
              medida brinden soluciones a estas situaciones problemáticas encontradas.
            </p>
            <p>Por creatividad se entiende a la facultad que alguien tiene para crear y a la
              capacidad creativa de un individuo. Consiste en encontrar procedimientos o
              elementos para desarrollar labores de manera distinta a la tradicional, con la intención de satisfacer un determinado propósito. La creatividad permite cumplir
              deseos personales o grupales de forma más veloz, sencilla, eficiente o económica.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Importancia de la creatividad en la educación</h2>
            <p>“La preocupación por el desarrollo de la creatividad en la educación superior,
              se remonta a los primeros niveles escolares. Quizá en los primeros tres años
              de la escuela primaria todavía se recibe algún tipo de estimulación para
              desarrollar la creatividad, pero a partir de ese momento va
              desapareciendo hasta la universidad, exceptuando aquellas carreras
              relacionadas con actividades artísticas. Sólo aquellos estudiantes que por
              "naturaleza" son creativos, esto es, que han desarrollado esta capacidad a
              pesar de la escuela, tienen el recurso para aplicarlo a nivel profesional.”
              (JED Pineda, 2012, pp. 2-3)</p>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2><Strong>GUÍA VISUAL DE ACTIVIDADES</Strong></h2>
        </div>
      </div> 
    </div>
    <div class="center" style="justify-content: center; align-items: center; display: flex;">
    <div class="container-fluid">

        <div class="center">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-resonsive" src="{{asset('asset/images/cronograma.png')}}" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>GUÍA</h3>
                    <p>Día 8 y 9 de septiembre 2017</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="{{asset('asset/images/cronograma.png')}}" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="team">
    <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
            <h2><Strong>AGENDA DEL EVENTO</Strong></h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-info" style="background-color: #e8e8e8; box-shadow: 8px 8px 10px #999;">
              <br>
                <h3><strong>DÍA 1: VIERNES 8 DE SEPTIEMBRE 2017</strong></h3>
                <br>
                <div class="row">
                  <div class="col-sm-4">
                    <p><strong>Hora</strong></p>
                    <p>08:00am – 09:00am</p>
                    <p>08:00am – 12:00pm</p>
                    <p>08:00am – 04:00pm</p>
                    <p>09:00am – 11:30am</p>
                    <p>10:00am – 01:00pm</p>
                    <p>12:00pm – 03:00pm</p>
                    <p>02:00pm – 04:00pm</p>
                  </div>
                  <div class="col-sm-4">
                    <p><strong>Actividad</strong></p>
                    <p>Apertura</p>
                    <p>Póster</p>
                    <p>Franja cultural</p>
                    <p>Conferencia 1</p>
                    <p>Taller 1 (SCRUM)</p>
                    <p>Taller 2 (Processing)</p>
                    <p>Conferencia 2</p>

                  </div>
                  <div class="col-sm-4">
                    <p><strong>Salón-Espacio</strong></p>
                    <p>Auditorio bloque B</p>
                    <p>Corredor Bloque B</p>
                    <p>Zona verde-Canchas</p>
                    <p>Aditorio bloque B</p>
                    <p>CIT</p>
                    <p>Salón 301 bloque B</p>
                    <p>Biblioteca</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-info" style="background-color: #e8e8e8; box-shadow: 8px 8px 10px #999;">
                <br>
                <h3><strong>DÍA 2: SÁBADO 9 DE SEPTIEMBRE 2017</strong></h3>
                <br>
                <div class="row">
                  <div class="col-sm-4">
                    <p><strong>Hora</strong></p>
                    <p>08:00am – 12:00pm</p>
                    <p>08:00am – 04:00pm</p>
                    <p>08:00am – 10:00am</p>
                    <p>08:00am – 11:00am</p>
                    <p>09:00am – 12:00pm</p>
                    <p>09:00am – 12:00pm</p>
                    <p>10:00am – 12:00pm</p>
                  </div>
                  <div class="col-sm-4">
                    <p><strong>Actividad</strong></p>
                    <p>Póster</p>
                    <p>Franja cultural</p>
                    <p>Conferencia 3</p>
                    <p>Taller 3 (Data mining)</p>
                    <p>Taller 1 (SCRUM-R)</p>
                    <p>Taller 2 (Processing-R)</p>
                    <p>Ponencias</p>

                  </div>
                  <div class="col-sm-4">
                    <p><strong>Salón-Espacio</strong></p>
                    <p>Corredor bloque B</p>
                    <p>Zona verde-Canchas</p>
                    <p>Auditorio</p>
                    <p>CIT</p>
                    <p>Salón 301 bloque B</p>
                    <p>Salón 302 bloque B</p>
                    <p>Salón 201 Sistemas</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
  </section><!--/#team-->

  <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <i class="fa fa-twitter"></i>
              <h4>Themeum</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
                <div class="item">
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
                <div class="item">                                
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2><Strong>Organizadores</Strong></h2>
            <p>________________</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-4">
              <div class="team-member wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;">
                <div class="member-image">
                  <img class="img-responsive" src="{{asset('#')}}" alt="">
                </div>
                <div class="member-info">
                  <h3>CIT</h3>
                  <h4>(Centro de Investigación y Tecnología)</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="team-member wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;">
                <div class="member-image">
                  <img class="img-responsive" src="{{asset('#')}}" alt="">
                </div>
                <div class="member-info">
                  <h3>CIT</h3>
                  <h4>(Centro de Investigación y Tecnología)</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="team-member wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: flipInY;">
                <div class="member-image">
                  <img class="img-responsive" src="{{asset('#')}}" alt="">
                </div>
                <div class="member-info">
                  <h3>CIT</h3>
                  <h4>(Centro de Investigación y Tecnología)</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="{{asset('asset/images/logo.png')}}" alt=""></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2014 Oxygen Theme.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.themeum.com/">Themeum</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal -->
  
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Inscripción</h4>
        </div>
        <div class="modal-body">

          <form id="main-contact-form" name="inscripcion" method="post" action="#">

            <div class="form-group">
              <label>Código:</label>
              <input id="pruebas" type="text" name="cod_ced" class="form-control has-error" placeholder="Código" required="required">
              <span id="prueba" class="error text-danger"></span>
            
            </div>
          
            <label>Nombre:</label>
            <div class="form-group">
               <input type="text" name="na" class="form-control" placeholder="Name" required="required">
               <span id="name" class="error text-danger"></span>
            </div>

            <label>Teléfono:</label>
            <div class="form-group">
              <input type="text" name="tel" class="form-control" placeholder="Teléfono" required="required">
              <span id="tel" class="error text-danger"></span>
            </div>
            
            <label>Rol:</label>
            <div class="form-group">
              <select name="rol" class="form-control"  required="required">
                <option value="Estudiante">Estudiante</option>
                <option value="Docente">Docente</option>
                <option value="Otro">Otro</option>
              </select>
            </div>
            <label>Correo:</label>

            <div class="form-group">
               <input type="email" name="em" class="form-control" placeholder="Email Address" required="required">
               <span id="email" class="error text-danger"></span>
            </div>
            
            <label>Sede - Extensión:</label>
            <div class="form-group">
              <select name="sede_ext" class="form-control" required="required">
                <option value="Facatativá">Facatativá</option>
                <option value="Fusagasugá">Fusagasugá</option>
                <option value="Girardot">Girardot</option>
                <option value="Ubate">Ubaté</option>
                <option value="Soacha">Soacha</option>
                <option value="Zipaquirá">Zipaquirá</option>
                <option value="Chia">Chia</option>
                <option value="Chocontá">Chocontá</option>
                <option value="Otro">Otro</option>
              </select>
            </div>

            <div class="form-group">
              <button type="submit" class="btn-submit btn-sub">Send Now</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-cerrar" data-dismiss="modal">Cerrar</button>
        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript" src="{{asset('asset/js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="{{asset('asset/js/jquery.inview.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/wow.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/mousescroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/smoothscroll.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/jquery.countTo.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/lightbox.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/main.js')}}"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  

  <script>
      $(document).ready(function(){
          $("#conf").click(function(){
              $(".actividad").hide();
              $(".articulo").hide();
              $(".conferencia").show();
          });
          $("#act").click(function(){
              $(".articulo").hide();
              $(".conferencia").hide();
              $(".actividad").show();
          });
          $("#art").click(function(){
              $(".conferencia").hide();
              $(".actividad").hide();
              $(".articulo").show();
          });
      });

      var id_temp;
      $('.btn-action').click(function (e) {
          e.preventDefault();
          id_temp = this.id;
      });

      $(document).ready(function(){
      $('.btn-sub').click(function (e) {
          e.preventDefault();
          var route = '{{ route('inscribir') }}'+'/'+id_temp;

          var type = 'POST';
          var async = async || false;

          var formData = new FormData();
          formData.append('cod_ced', $('input[name="cod_ced"]').val());
          formData.append('name', $('input:text[name="na"]').val());
          formData.append('tel', $('input[name="tel"]').val());
          formData.append('rol', $('select[name="rol"]').val());
          formData.append('email', $('input[name="em"]').val());
          formData.append('sede_ext', $('select[name="sede_ext"]').val());
          
          $.ajax({
              url: route,
              headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
              cache: false,
              type: type,
              contentType: false,
              data: formData,
              processData: false,
              async: async,
              beforeSend: function () {
                
              },
              
              success: function (response, xhr, request) {
                  
                  if (request.status === 200 && xhr === 'success') {
                    
                  }
              },
              error: function (response, xhr, request) {
                  if (response.status === 422 &&  xhr === 'error') {
                    
                     $("#prueba").text(response.responseJSON.cod_ced);
                     $("#name").text(response.responseJSON.name);
                     $("#tel").text(response.responseJSON.tel);
                     $("#email").text(response.responseJSON.email);
                     
                  }
              }
          });

         
          
      });
      
      });
      

      
  
    $(document).ready(function(){
        @if(isset($notification))
        console.log({{$notification->alert_type}});
        switch($notification->alert_type){
        case 'info':
            toastr.info('{{ $notification->message }}');
            break;
        
        case 'warning':
            toastr.warning('{{ $notification->message  }}');
            break;

        case 'success':
            toastr.success('{{ $notification->message }}');
            break;

        case 'error':
            toastr.error('{{ $notification->message }}');
            break;
    }   
        @endif
        

        

        
      });


  /*$(document).ready(function(){
          $( "#pruebas" ).keyup(function() {
                                                     $("#prueba").hide();
                                                      });
      });*/

      
  </script>
  





</body>
</html>