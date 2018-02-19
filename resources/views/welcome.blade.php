<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SCGAP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }}">
        
        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ route('inicio') }}">Inicio</a>
                    @else
                        <a href="{{ url('/login') }}">Iniciar Sesion</a>
                    @endif
                </div>
            @endif
            
        </div>
        <footer><!--
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">

                        <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1">
                            <a class="btn btn-social-icon blanco" href="https://www.facebook.com/NubeSolucionesDigitales/" target="_blank" role="button"><span class="fa fa-facebook-square"></span></a>
                        </div>
                            
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a class="btn btn-social-icon blanco" href=" https://twitter.com/nube_soldig" target="_blank" role="button"><span class="fa fa-twitter"></span></a>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a class="btn btn-social-icon blanco" href=" https://www.instagram.com/nubesolucionesdigitales/" target="_blank" role="button"><span class="fa fa-instagram"></span></a>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a class="btn btn-social-icon blanco" href="https://www.youtube.com/channel/UCvAcM7XqNTMP4EdzrsjD17A" target="_blank" role="button"><span class="fa fa-youtube-play"></span></a>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a class="btn btn-social-icon blanco" href=" http://nubepuebla.com/" target="_blank" role="button"><span class="fa fa-cloud"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            -->      
        </footer>
    </body>
</html>
