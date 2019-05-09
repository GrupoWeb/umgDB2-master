<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrapsfdsf -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/DataTables/datatables.css"/>
    <link rel="stylesheet" type="text/css" href="Date/src/DateTimePicker.css" />
    
 
    
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
                    @yield('Title')
                </div>

            </div>
        </nav>
        <div class="sidebar-fixed position-fixed ">

            <a class="caja-logo waves-effect" onClick="Iniciar('view/main.php','Dashboard')">
                @yield('logo') 
            </a>

            <div class="list-group list-group-flush" id="menu">
                @yield('Menu')
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
                            <span >@yield('lugar')</span>
                        </h4>
                    </div>
                </div>
        </div>
        <div class="container-fluid mt-5" id="contenedor"> 
            
            {{-- Inicio de los menus --}}

            @yield('Contenido')
            

            {{-- final de los menus --}}

        </div>
    </main>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/DataTables/datatables.js"></script>
    <script src="js/sweetalert.min.js"></script>
    {{-- <script type="text/javascript" src="Date/src/DateTimePicker.js"></script> --}}
    
    <!-- MDB core JavaScript -->
    <!-- <script type="text/javascript" src="include/js/mdb.min.js"></script> -->
    <script src="js/comandos.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/Grafico/google.js"></script>
    <!-- Initializations -->

</body>

</html>