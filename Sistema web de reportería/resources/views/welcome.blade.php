
<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Expires" content="0">

<meta http-equiv="Last-Modified" content="0">

<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

<meta http-equiv="Pragma" content="no-cache"> 

<title>RADAR</title>

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
                                        
                                        <a class="btn primary" href="{{url('/mercado')}}">INGRESAR</a>
                                        <a id= "emergentes"  class="btn secondary" href="#ventana2" data-toggle="modal">MÁS INFORMACIÓN</a>                                        
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
                                        
                                        <a class="btn primary" href="{{url('/economica')}}">INGRESAR</a>
                                        <a id= "emergentes"  class="btn secondary" href="#ventana3" data-toggle="modal">MÁS INFORMACIÓN</a>                                        
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
                                        
                                        <a class="btn primaryiz" href="{{url('/inclusion')}}">INGRESAR</a>
                                        <a class="btn secondaryiz" href="#ventana5" data-toggle="modal">MÁS INFORMACIÓN</a> 
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
                                        
                                        <a class="btn primaryiz" href="{{url('/desempenio')}}">INGRESAR</a>
                                        <a class="btn secondaryiz" href="#ventana4" data-toggle="modal">MÁS INFORMACIÓN</a>       
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
<div class="modal" id= "ventana1" data-backdrop="static">
        <div class="modal-dialog modal-lg">
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


<div class="modal" id= "ventana2" data-backdrop="static">
        <div class="modal-dialog modal-lg">
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

<div class="modal" id= "ventana3" data-backdrop="static">
        <div class="modal-dialog modal-lg">
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


<div class="modal" id= "ventana4" data-backdrop="static">
        <div class="modal-dialog modal-lg">
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


<div class="modal" id= "ventana5" data-backdrop="static">
        <div class="modal-dialog modal-lg">
                <div class="modal-content">
                        <div class="modal-header">
                                <img class="imgpopup" src="{{ URL::asset('/imagenes/radar_circulo5.png') }}">
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




<script src="/js/app-legacy.1b43465a.js" nomodule=""></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript"  src="{{asset('js/popups.js') }}"></script>



</body>
</html>