<!DOCTYPE html>
<html>
<head>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MOS Proyectos</title>

        <!-- Bootstrap -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
	<!-- NavBar-->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Inicia menu-->
                <div class="collapse navbar-collapse" id="navegacion-mos">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Página MOS Proyectos</a>
                        </li>
                        <li class="dropdown">
                            <a href="?p=productos" class="dropdown-toggle" data-toggle="dropdown">Ingresar<b class="caret"></b></a> 
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/login') }}">Administrador</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="?p=ser_servicios">Supervisor</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="?p=ser_soluciones">Recursos Humanos</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="?p=ser_telecom">Técnico</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="container">
	        <!-- Page Heading/Breadcrumbs -->
	        <div class="row">
	            <div class="col-lg-12">
	            <br>
	                <h1 class="page-header" align="center">MOS Proyectos
	                </h1>
	            </div>
	        </div>
	        <!-- /.row -->
	    <hr>
        
            <footer>
                <div class="row" align="center">
                    <div class="col-lg-12"">
                        <p>Copyright &copy;2016 | MOS Proyectos</p>
                        <ul class="list-unstyled list-inline list-social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                            </li>
                         </ul>                        
                    </div>
                </div>
            </footer> 
           
        </div> 

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>