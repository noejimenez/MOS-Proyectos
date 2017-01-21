<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MOSProyectos">
    <meta name="lang" content="es">
    <meta name="country" content="MX">
    <meta name="keywords" content="MOSProyectos,MOS,Construcción,Soluciones,Servicios,Telecomunicaciones">


    <!--Version System-->
    <meta name="version" content="1.0">
    <meta name="date" content="Enero 12 2017">

    <!-- Title -->
    <title>{{ trans('MOS Proyectos') }}</title>


    <!-- Custom styles -->
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <!-- Styles NavBar -->
    <link href="{{ asset('/css/bar.css') }}" rel="stylesheet">

    <!--Fonts -->
    <link href="{{ asset('fonts/uno.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('fonts/dos.css') }}" rel="stylesheet" type="text/css" >

    <link rel="icon" type="image/x-icon" href={{ asset('images/fav.png') }} />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>MOS Proyectos</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Inicio -->
                    <li class="active"><a href="#home" class="smoothScroll">{{ trans('Inicio') }}</a></li>
                    <!-- Respaldo Profesional -->
                    <li><a href="#respaldo" class="smoothScroll">{{ trans('Respaldo Profesional') }}</a></li>
                    <!-- Servicios -->
                    <li><a href="#servicios" class="smoothScroll">{{ trans('Servicios') }}</a></li>
                    <!-- Clientes -->
                    <li><a href="#clientes" class="smoothScroll">{{ trans('Clientes') }}</a></li>
                    <!--Acerca de Nosotros -->
                    <li><a href="#acerca" class="smoothScroll">{{ trans('Acerca de Nosotros') }}</a></li>                   
                    <!-- Contacto -->
                    <li><a href="#contacto" class="smoothScroll">{{ trans('Contacto') }}</a></li>

                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('Ingreso') }}</a></li>
                        {{-- <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
 --}}                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif

                </ul>

                {{-- <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('Ingreso') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
 --}}            </div>
        </div>
    </div>
    
     <!-- Carrusel -->
    <header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="mainban" src={{ asset('images/mos.jpg') }} alt="MOS">
                <div class="carousel-caption">
                     <h2></h2>
                </div>
            </div>
            <div class="item">
                <img class="mainban" src={{ asset('images/mos3.jpg') }} alt="MOS">
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <img class="mainban" src={{ asset('images/portadachoco.jpg') }} alt="MOS">
                <div class="carousel-caption">
                    <h2></h2> <!-- Titulo del Carrusel-->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <!-- Carrusel -->

    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container">     
                <div class="row centered">
                    <div class="col-lg-12 col-xs-12">
                        <div class="row"><!--row 2-->
                            <div class="col-xs-12">
                                <h1>Bienvenido(a) a MOS Proyectos</h1>
                                <h2>Soluciones Basadas en IT</h2>
                            </div>
                        </div>

                            <div class="col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4><i class="fa fa-fw fa-folder-o"></i>Curriculum Empresarial</h4>
                                    </div>
                                    <div class="panel-body">
                                        <p>MOS Proyectos es una empresa de servicios e integración de sistemas creada en 1991, en la ciudad de Toluca, Estado de México, con el objetivo de presentar servicios de consultoría, asesoría, logística, seguridad, soporte técnico y programas computacionales.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4><i class="fa fa-fw fa-group"></i>Respaldo Profesional</h4>
                                    </div>
                                    <div class="panel-body">
                                        <p>Actualmente contamos con varias certificaciones como lo son: Microsoft Partner, Certificación en Redes y Comunicaciones de Belden, Certificación de cableado estruturado por Panduit PCI, Partner HP Networking y SMC para redes, Telefonía y Seguridad, Certificación de Cableado Estructurado para Voz, Datos y Potencia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4><i class="fa fa-fw fa-child"></i>Clientes</h4>
                                    </div>
                                    <div class="panel-body">
                                        <p>Nuestros clientes son la parte más importante en el desempeño de negocio, es por eso que siempre mantenemos una estrecha relación con ellos y cuidamos cada detalle de servicio, asesoría y soporte brindando una atención personalizada y de primer nivel.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--row 2-->
                    </div>
                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>

   

    <!--Respaldo Profesional-->
    <section id="respaldo" name="respaldo">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <h1>Respaldo Profesional</h1>
                                <p>Actualmente contamos con varias certificaciones como lo son: Microsoft Partner para el área de Servidores y conectividad, contamos con personal con certificación en Redes y comunicaciones de Belden, Certificación en Cableado Estructurado por Panduit PCI, Partner HP Networking y SMC para redes, Telefonía y Seguridad, Certificación de Cableado Estructurado para Voz, Datos y Potencia, Hellermann Tyton, Partner Autorizado para Producto APC, así mismo contamos con Certificaciones y Distribución de equipos de Voz de marcas como Cisco, Samsung, Panasonic, Hewlett Packard para Computadoras Personales y Servidores.</p>

                                <div class="row">
                                    <div class="col-md-2 col-sm-4 col-xs-6"><!-- Imagenes 500x300 -->
                                        <img class="img-responsive customer-img" src={{ asset('images/profesional/microsoft.png') }} alt="Microsoft">
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/profesional/panduit.png') }} alt="Panduit">      
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/profesional/hp.jpg') }} alt="HP Networking">
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/profesional/cisco.jpg') }} alt="Cisco">
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/hellermanntyton.jpg') }} alt="Hellermann Tyton">
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/telmex.jpg') }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Servicios-->
    <section id="servicios" name="servicios">
        <div id="headerwrap">
            <div class="container">
                <!-- Servicios -->
                <div class="row">
                    <div class="col-xs-12 servicios">
                    <div class="panel panel-primary">
                        <h1 align="center">Servicios</h1>
                        <ul id="myTab" class="nav nav-pills nav-justified">
                            <li class="active tabservicios"><a href="#construccion" data-toggle="tab"><i class="fa fa-building"></i> Construcción de obra civil, estructural y arquitectónica</a>
                            </li>
                            <li class="tabservicios"><a href="#servicio" data-toggle="tab"><i class="fa fa-database"></i> Área Servicios</a>
                            </li>
                            <li class="tabservicios"><a href="#soluciones" data-toggle="tab"><i class="fa fa-desktop"></i> Área Soluciones</a>
                            </li>
                            <li class="tabservicios"><a href="#telecom" data-toggle="tab"><i class="fa fa-wifi"></i> Área Telecomunicaciones</a>
                            </li>
                        </ul>

                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="construccion">
                                <br>
                                <h4>&nbsp;Construcción de obra civil, estructural y arquitectónica</h4>
                                <ul>
                                    <li>Construcción de oficinas, naves y plantas industriales y áreas de servicios</li>
                                    <li>Construcción industrial</li>
                                    <li>Proyectos industriales</li>
                                    <li>Cimentaciones</li>
                                    <li>Amplia experiencia en diseño y construcción de plantas industriales</li>
                                    <li>Construcción de estructuras de naves industriales, plataformas, escaleras, grúas viajeras</li>
                                    <li>Remodelación y adecuacuación de instalaciones existentes</li>
                                    <li>Diseño y construcción de estructuras de concreto y de acero</li>
                                    <li>Instalación de redes hidráulicas y sanitarias pavimentos,pisos de concreto, terracerías y cimentaciones</li>
                                    <li>Trabajos de albañilería y acabados en general(yeso,tabalarroca, plafones, pasta, pintura, impermeabilizaciones</li>
                                    <li>Cancelería de aluminio y trabajos de herrería</li>
                                </ul>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-6"><!-- Imagenes 500x300 -->
                                        <img class="img-responsive customer-img" src= {{ asset('images/servicios/serv1.jpg') }} alt="MOS Proyectos">
                                        <br>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/serv2.jpg') }} alt="MOS Proyectos">
                                        <br>      
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/serv3.jpg') }} alt="MOS Proyectos">
                                        <br>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/serv4.jpg') }} alt="MOS Proyectos">
                                        <br>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/serv5.jpg') }} alt="MOS Proyectos">
                                        <br>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/serv6.jpg') }} alt="MOS Proyectos">
                                        <br>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <div class="tab-pane fade" id="servicio">
                                <br>
                                <h4>&nbsp;Área Servicios</h4>
                                <ul>
                                   <li>Mantenimiento de equipo de cómputo e impresoras</li>
                                   <li>Reparación de equipo de cómputo e impresoras</li>
                                   <li>Asesoría en sistemas operativos y aplicaciones en general</li>
                                   <li>Desarrollo de soluciones de flujo de información</li>
                                   <li>Detección y remoción de virus computaciones</li>
                                   <li>Diseño y desarrollo de centros de cómputo</li>
                                   <li>Servidores de páginas, manejo de dominios, servidores de e-mail</li>
                                   <li>Implementación de Sistemas Administrativos Microsip</li>
                                </ul>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-6"><!-- Imagenes 500x300 -->
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/mant1.jpeg') }} alt="MOS Proyectos">
                                        <br>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/mant2.jpeg') }} alt="MOS Proyectos">     
                                        <br> 
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="soluciones">
                                <br>
                                <h4>&nbsp;Área Soluciones</h4>
                                <ul>
                                    <li>Venta de equipo de cómputo, impresoras, equipo de comunicación  y telefonía</li>
                                    <li>Desarrollo de proyectos de conectividad  y comunicaciones</li>
                                    <li>Venta de Accesorios, Periféricos y Consumibles</li>
                                    <li>Consultoría y Asesoría en desarrollo de proyectos para redes locales o área amplia</li>
                                    <li>Consultoría y Asesoría en instalación e implementación de equipos especializados de procesamiento de imágenes</li>
                                    <li>Consultoría y Asesoría en instalación e implementación de equipos especializados de Almacenamiento Masivo</li>
                                    <li>Venta de Equipos de Comunicaciones y Redes de datos</li>
                                    <li>Soluciones de Seguridad para Redes</li>
                                    <li>Soluciones de punto de venta y control de inventario</li>
                                    <li>Instalaciones y puesta a puntos de Sistemas Operativos</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="telecom">
                                <br>
                                <h4>&nbsp;Área Telecomunicaciones</h4>
                                <ul>
                                    <li>Implementación de cableado estructurado Certificado Pandiut UPI y Hellermann Tyton</li>
                                    <li>Implementación de Fibra Óptica varias marcas, Monomodo y Multimodo</li>
                                    <li>Implementación de Redes Inalámbricas diversas marcas</li>
                                    <li>Implementación de Enlaces Punto</li>
                                    <li>Punto y Multipunto para Redes Inalámbricas</li>
                                    <li>Implementación de Enlaces Punto-Punto y Multipunto para enlaces digitales terrestres y de Fibra Óptica</li>
                                    <li>Implementación de Enlaces de voz y  datos</li>
                                    <li>Implementación de Sistemas de Voz sobre IP 3Com,Cisco y 3Cx -Desarrollo de soluciones Internet e Intranet</li>
                                    <li>Soluciones de acceso a Internet Empresarial, Corporativo y Seguridad de Redes</li>
                                    <li>Instalaciones de Redes de cómputo</li>
                                    <li>Instalación y configuración de Equipos de Conmutador Analógicos y Digitales</li>
                                    <li>Sistemas de Tierras Físicas</li>
                                    <li>Cableado Eléctrico para equipo y Centros de Cómputo asó como equipos informáticos especializados</li>
                                    <li>Equipos de Seguridad Informática Interna y Perimetral</li>
                                </ul>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-6"><!-- Imagenes 500x300 -->
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/telecom1.jpg') }} alt="MOS Proyectos">
                                        <br>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/chevy.jpg') }} alt="MOS Proyectos">     
                                        <br> 
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/telecom2.jpg') }} alt="MOS Proyectos">
                                        <br>
                                    </div>
                                    <!-- Images 500x300 -->
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/telecom3.jpeg') }} alt="MOS Proyectos">
                                        <br>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/telecom4.jpeg') }} alt="MOS Proyectos">    
                                        <br>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive customer-img" src={{ asset('images/servicios/telecom5.jpeg') }} alt="MOS Proyectos">
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> <!--row-->
            </div>
        </div>
    </section>
    

    <!--Clientes-->
    <section id="clientes" name="clientes">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-xs-12">
                        <div class="panel panel-primary">
                            <h1> Clientes</h1>
                            <p>Nuestros clientes son la parte más importante en el desempeño del negocio, es por eso que siempre mantenemos una estrecha relación con ellos y cuidamos cada detalle de servicio, asesoría y soporte brindando una atención personalizada y de primer nivel.</p>

                            <div class="row">
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <img class="img-responsive customer-img" src={{ asset('images/telmex.jpg') }} alt="">
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <img class="img-responsive customer-img" src={{ asset('images/clientes/volaris.jpg') }} alt="">
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <img class="img-responsive customer-img" src={{ asset('images/clientes/across.png') }} alt="">
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <img class="img-responsive customer-img" src={{ asset('images/clientes/ara.jpg') }} alt="">
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <img class="img-responsive customer-img" src={{ asset('images/clientes/cmic.jpg') }} alt="">
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <img class="img-responsive customer-img" src={{ asset('images/clientes/kellogs.jpg') }} alt="">
                                <br>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <img class="img-responsive customer-img" src={{ asset('images/clientes/edomex.jpg') }} alt="">
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <img class="img-responsive customer-img" src={{ asset('images/clientes/jc.jpg') }} alt="">
                            </div>
                                                        
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>


    <!-- Acerca de Nosotros -->
    <section id="acerca" name="acerca">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-xs-12">
                        <h1> Acerca de Nosotros</h1>
                        <div class="panel panel-primary">
                            
                            <p> MOS PROYECTOS es una empresa de servicios e integración de sistemas creada en 1991, en la ciudad de Toluca, Estado de México, con el objetivo de prestar servicios de consultoría, asesoría, logística, seguridad, soporte técnico de equipos y programas computacionales, además del desarrollo de proyectos de conectividad, redes y telecomunicaciones tanto de área local, amplia y extendida así como la prestación de servicios y soporte en el área de telefonía digital y análoga.</p>

                        </div>  

                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4><i class="fa fa-fw fa-check"></i>Misión</h4>
                                </div>
                                <div class="panel-body">
                                    <p align="justify">Nuestra razón de ser, es ser el "socio más confiable" para nuestros clientes proveyendo de servicios de consultoría, mantenimiento, logística, seguridad, desarrollo de infraestructura en el ramo de las telecomunicaciones con la integración de soluciones brindando valores agregados basados en la implementación de tecnología especializada a través de un equipo de profesionales comporometidos y con calidez humana.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4><i class="fa fa-fw fa-check"></i>Visión</h4>
                                </div>
                                <div class="panel-body">
                                    <p align="justify">Posicionarnos como referentes expertos en el mercado nacional de tecnologías  de información y comunicaciones en servicios de consultoría, logística, seguridad y desarrollo de infraestructura.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4><i class="fa fa-fw fa-check"></i>Valores</h4>
                                </div>
                                <div class="panel-body">
                                   <ul>
                                       <li>Flexibilidad</li>
                                       <li>Confianza</li>
                                       <li>Colaboración</li>
                                       <li>Innovación</li>
                                       <li>Agilidad</li>
                                       <li>Pasión</li>
                                   </ul>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>
    



    <section id="contacto" name="contacto">
        <div id="footerwrap">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <h2>{{ trans('Contacto') }}</h2>
                    <p>
                        Av. Gómez Farias No.619 &nbsp; CP. 50080<br/>
                        Toluca &nbsp; México<br/>

                        <i class="fa fa-phone"></i>  
                        <abbr title="Telefono">Tel</abbr>: (722) 2-07-33-16
                        <br>
                        <i class="fa fa-envelope-o"></i> 
                        <abbr title="Correo">E-mail</abbr>:<a href="mailto:sugerencias@mosproyectos.com.mx">sugerencias@mosproyectos.com.mx</a>
                        <br>
                        <i class="fa fa-clock-o"></i> 
                        <abbr title="Horario">H</abbr>: Lunes - Viernes: 9:00 AM a 6:00 PM
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <!-- Google Maps -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.4834865200727!2d-99.6609880708379!3d19.28523849918552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd89bee056f60b%3A0x4be13aeb5f756a8c!2sValent%C3%ADn+G%C3%B3mez+Far%C3%ADas+619%2C+Francisco+Murgu%C3%ADa%2C+50130+Toluca+de+Lerdo%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1481672669089" width="100%" height="300px" frameborder="0" style="border:0" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!--Footer -->
    <div id="c">
        <div class="container">
            <p>
                <strong>Copyright &copy; 2017
                <br>
                MOS Proyectos
                </strong>
                {{-- <ul class="list-unstyled list-inline list-social-icons">
                    <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                </ul>
 --}}            </p>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript
================================================== -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>

<!-- Carousel -->
<script>
    $('.carousel').carousel({
    interval: 5000 //cambio de velocidad
    })
</script>

</body>
</html>