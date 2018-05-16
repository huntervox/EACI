
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>EACI | Espacio Academico de Creatividad e Innovación</title>
  <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/font-awesome.min.css')}}" rel="stylesheet">

  <link href="{{asset('asset/css/error.css')}}" rel="stylesheet">
  
  <link href="{{asset('asset/css/main.css')}}" rel="stylesheet">
  <link id="css-preset" href="{{asset('asset/css/presets/preset1.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet">
  <link rel="shortcut icon" href="{{asset('asset/images/logo54.png')}}">

  
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    Lo sentimos, ha ocurrido un error, la página solicitada no se encuentra!
                </div>
                <div class="error-actions">
                    <a href="http://www.eaciudec.com" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Inicio </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>