<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
      
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">
        <meta name="path_url" content="{{url('')}}">

      
        <meta property="og:site_name" content=""> 
        <meta property="og:site" content=""> 
        <meta property="og:title" content=""> 
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content=""> 
        <meta name="twitter:card" content="summary_large_image">

        
        <title>Inxait</title>
        
        <!-- Styles -->
        <link href="../../css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
        <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{url('css/fontawesome-all.css')}}" rel="stylesheet">
        <link href="{{url('css/swiper.css')}}" rel="stylesheet">
        <link href="{{url('css/magnific-popup.css')}}" rel="stylesheet">
        <!-- datatable -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/r-2.3.0/datatables.min.css"/>
 

        <!--  -->
        <link href="{{url('css/styles.css')}}" rel="stylesheet">
        <link rel="icon" href="images/favicon.png">

        @stack('page_styles')
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        
     
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <div class="container">
                
               
                <a class="navbar-brand logo-image" href="/">
                    Compañia
                </a> 

                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#header">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/#ganadores">Ganadores</a>
                        </li>
                        
                    </ul>
                  
                </div> 
            </div>
        </nav>
      


        @yield('content')
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                            <h6>Nosotros</h6>
                            <p class="p-small">Compañia de automóviles</p>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col second">
                            <h6>Menu</h6>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li><a href="/#header">Inicio</a></a></li>
                                <li><a href="/#ganadores">Ganadores</a></li>
                            </ul>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col third">
                           
                            <p class="p-small">Prueba Back End Inxait <a href="mailto:info@pruebainxait.com"><strong>info@pruebainxait.com</strong></a></p>
                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> 
        



        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © Todos lo derechos reservados</p>
                    </div> 
                </div> 
            </div> 
        </div> 
       
        
        
        <!-- Scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>

        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/r-2.3.0/datatables.min.js"></script>

        <script src="js/bootstrap.min.js"></script> 
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/swiper.min.js"></script> 
        <script src="js/jquery.magnific-popup.js"></script> 
        <script src="js/scripts.js"></script>
        <script src="js/controller/general-scripts.js"></script>
        
        @stack('page_scripts')
        <script>
            $(document).ready( function () {
                $('.datatable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'excel'
                    ],
                    "paging": false,
                    "searching": false
                });
            });
        </script>
    </body>
</html>