<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fundación Olimpica Guatemalteca</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="include/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrapsfdsf -->
    <link href="include/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="include/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="include/css/custom.css">
    <link rel="stylesheet" type="text/css" href="include/css/DataTables/datatables.css"/>
    <link rel="stylesheet" type="text/css" href="include/Date/src/DateTimePicker.css" />
    
 
    
</head>

<body class="grey lighten-3">

    <header>

        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar shelf ">
            <div class="container-fluid">
                <!-- <a class="navbar-brand asdfwaves-effect" onClick="Iniciar('view/main.php','Dashboard')" >
                    <strong class="blue-text">DACE </strong> 
                </a> -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <h5 class="TitleFundacion">Fundación Olimpica Guatemalteca</h5>
                </div>

            </div>
        </nav>
        <div class="sidebar-fixed position-fixed ">

            <a class="caja-logo waves-effect" onClick="Iniciar('view/main.php','Dashboard')">
                <img src="include/img/logo.jpg" class="logo" alt="">
            </a>

            <div class="list-group list-group-flush" id="menu">
                <ul>
                    <li><a onClick="Iniciar('view/main.php','Dashboard')" id="dash" class="list-group-item list-group-item-action active waves-effect">
                        <i class="fa fa-pie-chart mr-3"></i>Dashboard
                    </a></li>
                    <li><a onClick="Iniciar('view/capacitador.php','Capacitadores')"  id="capacitadores" class="list-group-item list-group-item-action waves-effect">
                        <i class="fa fa-user mr-3"></i>Capacitadores</a></li>
                    <li><a   onClick="Iniciar('view/capacitacion.php','Capacitaciones')" id="capacitaciones" class="list-group-item list-group-item-action waves-effect">
                        <i class="fa fa-table mr-3"></i>Capacitaciones</a></li>
                    <li><a onClick="Iniciar('view/preguntas.php','Preguntas')" id="preguntas" class="list-group-item list-group-item-action waves-effect">
                        <i class="fa fa-map mr-3"></i>Preguntas</a></li>
                    <li><a onClick="Iniciar('view/ingresoCapa.php','Control de Capacitaciones')" id="ingreso" class="list-group-item list-group-item-action waves-effect">
                        <i class="fa fa-money mr-3"></i>Ingresos</a></li>
                    <li><a onClick="Iniciar('view/indicadores.php','Indicadores')" id="reportes" class="list-group-item list-group-item-action waves-effect">
                        <i class="fa fa-money mr-3"></i>Indicadores</a></li>
                </ul>
                
            </div>

        </div>
    </header>
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
                <div class="card mb-4 wow fadeIn">
                    <div class="card-body d-sm-flex justify-content-between TitleArticle">
                        <h4 class="mb-2 mb-sm-0 pt-1">
                            <a onClick="Iniciar('view/main.php','Dashboard')" class="red-text" >Inicio</a>
                            <span>/</span>
                            <span id="ruta">Dashboard</span>
                        </h4>
                    </div>
                </div>
        </div>
        <div class="container-fluid mt-5" id="contenedor">    
        </div>
    </main>
    <script type="text/javascript" src="include/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="include/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="include/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="include/css/DataTables/datatables.js"></script>
    <script src="include/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="include/Date/src/DateTimePicker.js"></script>
    
    <!-- MDB core JavaScript -->
    <!-- <script type="text/javascript" src="include/js/mdb.min.js"></script> -->
    <script src="include/js/comandos.js"></script>
    <script src="include/js/custom.js"></script>
    <script src="include/js/Grafico/google.js"></script>
    <!-- Initializations -->

</body>

</html>