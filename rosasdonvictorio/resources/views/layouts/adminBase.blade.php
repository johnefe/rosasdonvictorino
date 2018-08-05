<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin Colors</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <script src="https://use.fontawesome.com/b5998af619.js"></script>
    <link rel="stylesheet" href="/assets/css/demop.css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/animate.min.css" rel="stylesheet"/>
    <link href="/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href='/css/style.css'>
    <script src="/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="/assets/img/sidebar-5.jpg">

        <div class="sidebar-wrapper clasico">
            <div class="logo">
                <a href="http://www.floristeriaColors.com" class="simple-text">
                    FLORISTERÍA COLORS
                </a>
            </div>
             <ul id="accordion9" class=" nav">
                    <li>
                        <div class="link linkito">
                            <a href="/admin/datos">
                                <i class="fa fa-address-card fa-1x"></i>
                                MIS DATOS
                            </a>
                        </div>
                    </li>
                      <li>
                        <div class="link linkito">
                            <a href="/admin/clientes">
                                <i class="fa fa-user-circle fa-1x"></i>
                                CLIENTES
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="link linkito">
                            <a>
                                <i class="fa fa-leaf fa-1x"></i>
                                PRODUCTOS
                            </a>
                        </div>
                        <ul class="submenu2">
                            <li><a href="/admin/productos/create">  NUEVO</a></li>
                            <li><a href="/admin/productos">  LISTAR</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link linkito">
                            <a>
                                <i class="fa fa-leaf fa-1x"></i>
                                CATEGORIAS
                            </a>
                        </div>
                        <ul class="submenu2">
                            <li><a href="/admin/categorias/create">  NUEVO</a></li>
                            <li><a href="/admin/categorias">  LISTAR</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link linkito">
                            <a href="/admin/ocasiones">
                                <i class="fa fa-telegram fa-1x"></i>
                                OCASIONES
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="link linkito">
                            <a href="/admin/mas_vendidos">
                                <i class="fa fa-ravelry fa-1x"></i>
                                MAS VENDIDOS
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="link linkito">
                            <a href="/admin/destacados">
                                <i class="fa fa-check fa-1x"></i>
                                DESTACADOS
                            </a>
                        </div>
                    </li>
                    
                    <li>
                        <div class="link linkito">
                            <a href="#">
                                <i class="fa fa-money fa-1x"></i>
                                PRECIOS
                            </a>
                        </div>
                        <ul class="submenu2">
                            <li><a href="/admin/precios/create">  NUEVO</a></li>
                            <li><a href="/admin/precios">  LISTAR</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="link linkito">
                            <a href="/admin/carritos">
                                <i class="fa fa-line-chart fa-1x"></i>
                                VENTAS
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="link linkito">
                            <a href="/admin/multimedia">
                                <i class="fa fa-youtube-play fa-1x"></i>
                                MULTIMEDIA
                            </a>
                        </div>
                    </li>


                     <li>
                        <div class="link linkito">
                            <a href="#">
                                <i class="fa fa-newspaper-o fa-1x"></i>
                                NOTICIAS BLOG
                            </a>
                        </div>
                        <ul class="submenu2">
                             <li><a href="/admin/articulos/create">  NUEVO</a></li>
                            <li><a href="/admin/articulos">  LISTAR</a></li>
                        </ul>
                    </li>
            </ul>


            
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Administrador</a>
                </div>
                <div class="collapse navbar-collapse ">
                    

                    <ul class="nav navbar-nav navbar-right ">
                        <li >

                           <!--formulario cerrar sesión admin -->
                           <form action="/logout" method="POST"> 
                           {{ csrf_field() }}
                            <input type="submit" name="" class="btn btni"  value="CERRAR SESIÓN">
                            </form>


                           <!--fin formulario cerrar sesión admin -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- contenedor de acciones -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- fin contenedor de acciones -->


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.facebook.com/jhon.f.diaz.96">Jhon Diaz</a>-<a href="https://www.facebook.com/GeorgeJDC">Jorge Viveros</a> Desarrollo frontend- backend 
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->

    
    <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src='/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js'></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="/assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="/assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="/assets/js/demop.js"></script>
    <script type="text/javascript" src="/js/menu.js"></script>


</html>