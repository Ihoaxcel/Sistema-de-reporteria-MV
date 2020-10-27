
<!doctype html>
<html lang="en">
<head>

<title>RADAR</title>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

<!--LLAMADO A LOS ESTILOS CSS-->
<link href="{{ URL::asset('/css/iniciostyle.css') }}" rel="stylesheet" type="text/css" >

<link rel="shortcut icon" href="{{ URL::asset('/imagenes/radar_icono0.png') }}"/>

</head>
<body >
<div class="card general"> 
        <center> 
                <div class="concentral">
                        <ul>
                                <li class="box1">
                                        
                                                
                                                <div class="contenedores">
                                                        <a class="rutaCap" href="{{url('/financiera')}}"><img src="{{ URL::asset('/imagenes/radar_circulo1.png') }}"></a>
                                                </div>
                                                
                                                <div class="descrip derecha">
                                                        <p class="textodes">
                                                                <lavel class="btn primary" style="color:red; left: -90px;background: transparent;font-weight: bold;font-size: 1.5em">Privado</lavel>
                                                                <a class="btn primary" href="{{url('/financiera')}}">INGRESAR</a>
                                                                <a id= "emergentes" class="btn secondary" href="#ventana1" data-toggle="modal">MÁS INFORMACIÓN</a>
                                                                
                                                        </p>
                                                </div>

                                </li>
                                <li class="box2">
                                        <div class="img">
                                                <div class="contenedores">

                                                        <a class="rutaCap"  href="{{url('/mercado')}}"><img src="{{ URL::asset('/imagenes/radar_circulo2.png') }}"></a>
                                                </div>

                                                <div class="descrip derecha">
                                                        <p class="textodes">
                                                                <lavel class="btn primary" style="color:red; left: -90px;background: transparent;font-weight: bold;font-size: 1.5em">Privado</lavel>
                                                                <a class="btn primary" href="{{url('/mercado')}}">INGRESAR</a>
                                                                <!--<a id= "emergentes"  class="btn secondary" href="#ventana2" data-toggle="modal">MÁS INFORMACIÓN</a>-->
                                                                <button type="button" class="btn btn-primary secondary" data-toggle="modal" data-target="#ventana2">MÁS INFORMACIÓN</button>                                       
                                                        </p>
                                                </div>
                                        </div>
                                </li>

                                <li class="box3">
                                        <div class="img">
                                                <div class="contenedores">

                                                        <a class="rutaCap"  href="{{url('/economica')}}"><img  src="{{ URL::asset('/imagenes/radar_circulo3.png') }}"></a>
                                                </div>

                                                <div class="descrip derecha">
                                                        <p class="textodes">
                                                                <lavel class="btn primary" style="color:green;left: -85px;background: transparent;font-weight: bold;font-size: 1.5em">Público</lavel>
                                                                <a class="btn primary" href="{{url('/economica')}}">INGRESAR</a>
                                                                <!--<a id= "emergentes"  class="btn secondary" href="#ventana3" data-toggle="modal">MÁS INFORMACIÓN</a>-->
                                                                <button type="button" class="btn btn-primary secondary" data-toggle="modal" data-target="#ventana3">MÁS INFORMACIÓN</button>                                       
                                                        </p>
                                                </div>

                                        </div>
                                        
                                </li>
                                
                                <li class="box4">
                                        <div class="img">
                                                <div class="contenedores">
                                                        <a class="rutaCap"  href="{{url('/inclusion')}}"><img src="{{ URL::asset('/imagenes/radar_circulo5.png') }}"></a>
                                                </div> 
                                                
                                                <div class="descrip izquierda">
                                                        <p class="textodes">
                                                        <lavel class="btn primaryiz" style="color:green;left: 200px;background: transparent;font-weight: bold;font-size: 1.5em">Público</lavel>
                                                                <a class="btn primaryiz" href="{{url('/inclusion')}}" style="left: 114px;">INGRESAR</a>
                                                                <!--<a class="btn secondaryiz" href="#ventana5" data-toggle="modal">MÁS INFORMACIÓN</a>-->
                                                                <button type="button" class="btn btn-primary secondary" data-toggle="modal" data-target="#ventana5">MÁS INFORMACIÓN</button>                                       
                                                        </p>
                                                </div>
                                        </div>
                                </li>

                                <li class="box5">
                                <div class="img">
                                                <div class="contenedores">
                                                        
                                                
                                                        <a class="rutaCap"  href="{{url('/desempenio')}}"><img src="{{ URL::asset('/imagenes/radar_circulo4.png') }}"></a>
                                                </div>

                                                <div class="descrip izquierda">
                                                        <p class="textodes">
                                                                <lavel class="btn primaryiz" style="color:red; left: 201px;background: transparent;font-weight: bold;font-size: 1.5em">Privado</lavel>
                                                                <a class="btn primaryiz" href="{{url('/desempenio')}}" style="left: 114px;">INGRESAR</a>
                                                                <!--<a class="btn secondaryiz" href="#ventana4" data-toggle="modal">MÁS INFORMACIÓN</a>-->
                                                                <button type="button" class="btn btn-primary secondary" data-toggle="modal" data-target="#ventana4">MÁS INFORMACIÓN</button>                                       
                                                        </p>
                                                        
                                                </div>
                                        </div>
                                </li>
                                
                                <li class="box6">
                                        <div class="img">
                                                <div class="central">
                                                        <img src="{{ URL::asset('/imagenes/radar_logo.png') }}">
                                                </div>
                                        </div>
                                </li>
                                
                                <div class="card divTutorial">

                                        <a href="https://rfd.org.ec/manuales-de-usuario-radar-rfd" target="_blank"><img class="btnTutorial" src="{{ URL::asset('/imagenes/botonTutorial.png') }}"></a>
                                        <p class="textodesTutorial">
                                        <a class="btn primaryiz" href="https://rfd.org.ec/manuales-de-usuario-radar-rfd" target="_blank">Video tutorial</a>
                                        </p>
                                </div>
                        </ul>
                </div>
        </center>

</div>
<!-----------------------
        POP UP 
------------------------->

<div class="modal" id="ventana1" tabindex="-1" aria-labelledby="ventana1" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
                <img class="imgpopup" src="{{ URL::asset('/imagenes/radar_circulo1.png') }}">
                <h6>INFORMACIÓN FINANCIERA</h6> 
                <button tyle="botton" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>  
        </div>
        <div class="modal-body">
                <iframe id="iframePDF" name="iframePDF" width="100%" height="450px" src="{{URL::asset('/archivos/Información financiera.pdf')}}"></iframe>
        </div>
        <div class="modal-footer"> 
                <a href="{{url('/financiera')}}">INGRESAR AL CAPÍTULO</a>
        </div>
    </div>
  </div>
</div>

<div class="modal" id="ventana2" tabindex="-1" aria-labelledby="ventana2" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
                <img class="imgpopup" src="{{ URL::asset('/imagenes/radar_circulo2.png') }}">
                <h6>INFORMACIÓN DE MERCADO</h6>
                <button tyle="botton" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>    
        </div>
        <div class="modal-body">
        <iframe id="iframePDF" name="iframePDF" width="100%" height="450px" src="{{URL::asset('/archivos/Información de mercado.pdf')}}"></iframe>
        </div>
        <div class="modal-footer"> 
        <a href="{{url('/mercado')}}">INGRESAR AL CAPÍTULO</a>
        </div>
    </div>
  </div>
</div>


<div class="modal" id="ventana3" tabindex="-1" aria-labelledby="ventana3" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
                                <img class="imgpopup" src="{{ URL::asset('/imagenes/radar_circulo3.png') }}">
                                <h6>INFORMACIÓN ECONÓMICA</h6>
                                <button tyle="botton" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>  
                        </div>
                        <div class="modal-body">
                            <iframe id="iframePDF" name="iframePDF" width="100%" height="450px" src="{{URL::asset('/archivos/Información macroeconómica.pdf')}}"></iframe>  
                        </div>
                        <div class="modal-footer">
                            <a href="{{url('/economica')}}">INGRESAR AL CAPÍTULO</a>
                        </div>
    </div>
  </div>
</div>


<div class="modal" id="ventana4" tabindex="-1" aria-labelledby="ventana4" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
                                <img class="imgpopup" src="{{ URL::asset('/imagenes/radar_circulo4.png') }}">
                                <h6>INFORMACIÓN DE DESEMPEÑO SOCIAL</h6></center>  
                                <button tyle="botton" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>  
                        </div>
                        <div class="modal-body">
                            <iframe id="iframePDF" name="iframePDF" width="100%" height="450px" src="{{URL::asset('/archivos/Información social.pdf')}}"></iframe>  
                        </div>
                        <div class="modal-footer">
                            <a href="{{url('/desempenio')}}">INGRESAR AL CAPÍTULO</a>
                        </div>
    </div>
  </div>
</div>

<div class="modal" id="ventana5" tabindex="-1" aria-labelledby="ventana5" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <div class="modal-header">
                                <img  class="imgpopup" src="{{ URL::asset('/imagenes/radar_circulo5.png') }}">
                                <h6>INCLUSIÓN FINANCIERA</h6>
                                <button tyle="botton" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>  
                        </div>
                        <div class="modal-body">
               
                                        <iframe id="iframePDF" name="iframePDF" width="100%" height="450px" src="{{URL::asset('/archivos/Información de inclusión financiera.pdf')}}"></iframe>  
                        </div>
                        <div class="modal-footer">
                                <a href="{{url('/inclusion')}}">INGRESAR AL CAPÍTULO</a>
                        </div>
    </div>
  </div>
</div>



<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>