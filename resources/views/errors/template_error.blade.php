
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SENA - Ambiente de aprendizaje</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('img/logos/logo.png')}}">

        <link href="{{asset('dashor/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('dashor/assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('dashor/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('dashor/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">
        <!-- Begin page -->
        <!--<div class="accountbg"></div>-->
        <div id="stars"></div>
        <div id="stars2"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-block">

                    <div class="ex-page-content text-center mt-4">
                        
                        <img src="{{asset('img/logos/logo.png')}}" alt="" class="rounded-circle  mx-auto d-block w-80">
                        <h1 class="mb-0"> @section('titulo') 404! @show</h1>
                        <h5 class=""> @section('mensaje') Lo sentimos, página no encontrada! @show </h5><br>

                        <a class="btn btn-primary mb-5 waves-effect waves-light text-light" href="{{url('/inicio')}}">Regresar al inicio</a>
                    </div>

                </div>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="{{asset('dashor/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('dashor/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('dashor/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('dashor/assets/js/detect.js')}}"></script>
        <script src="{{asset('dashor/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('dashor/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('dashor/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('dashor/assets/js/waves.js')}}"></script>
        <script src="{{asset('dashor/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('dashor/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('dashor/assets/js/app.js')}}"></script>

    </body>
</html>