<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link href="{{ URL::asset('css/menu.css') }}" rel="stylesheet" type="text/css" >
        
    <link rel="shortcut icon" href="{{ URL::asset('/imagenes/radar_icono0.png') }}"/>

    <title>RADAR</title>

</head>
<body >
<div class="card">
    <div class="card-body">
        <div class="principal-contenedor">
            <div class="contenedor_menu" id="contenedor_menu">
                <center>@yield('logoCentral')</center>
                        
                <ul class="menu">   
                        @yield('menu')
                        
                        <li>
                            <a class="rutaCap" href="#ventana2" data-toggle="modal">
                                <img class="icono izquierdo material-icons" src="{{ URL::asset('/imagenes/radar_icono6.ico') }}">
                            </a>
                            <p class="texto"><a href="#ventana2" data-toggle="modal">Manual de usuario</a></p>        
                        
                        </li>

                        <li>
                            <a class="rutaCap" href="#ventana1" data-toggle="modal">
                                <img class="icono izquierdo material-icons" src="{{ URL::asset('/imagenes/cerrar.png') }}">
                            </a>
                            <p class="texto"><a href="#ventana1" data-toggle="modal">Cerrar sesión</a></p>        
                        
                        </li>
                        
                </ul>
            </div>
        </div>







        <div class="pantalla_central">
            <div id="control">
                @yield('contenido')
            </div>
        </div>

        <div class="pie_radar2">
                <footer>
                <div class="row">
                    <div class="col-md-4 contenedorFooter">
                        <img class="footerLogo" src="{{ URL::asset('/imagenes/logo-white.png') }}">
                    </div>
                    <div class="col-md-4 contenedorFooter">
                        <center>
                        <img class="contenidoRFD img1" src="{{ URL::asset('/imagenes/icn_location.png') }}"><p class="textoFooter">Pasaje El Jardín E10-06 y Av. 6 de Diciembre</p>
                        <img class="contenidoRFD img2" src="{{ URL::asset('/imagenes/icn_phone.png') }}" ><p class="textoFooter"> (593-2) 333-2446 / 333-3091 Ext. 104 y 105</p>
                        <img class="contenidoRFD img3" src="{{ URL::asset('/imagenes/icn_email.png') }}" ><p class="textoFooter">operaciones@rfd.org.ec</p >
                        </center>
                    </div>
                    <div class="col-md-4 contenedorFooter">
                                <center>
                                <a href="https://www.facebook.com/rfdecuador" target="_blank">
                                <img class="redesSociales"  src="{{ URL::asset('/imagenes/icn_facebook.png') }}" src="images/icn_facebook.png" class="social"></a> 
                                <a href="https://twitter.com/rfdecuador" target="_blank">
                                <img class="redesSociales"  src="{{ URL::asset('/imagenes/icn_twitter.png') }}" class="social"></a> 
                                <a href="http://www.youtube.com/c/RedDeInstitucionesFinancierasDeDesarrollo" target="_blank">
                                <img class="redesSociales"  src="{{ URL::asset('/imagenes/icn_youtube.png') }}" class="social"></a> 
                                <a href="https://ec.linkedin.com/company/rfdecuador" target="_blank">
                                <img class="redesSociales"  src="{{ URL::asset('/imagenes/icn_linkedin.png') }}" class="social"></a>
                                </center>
                                <p style='font-size:.7em; text-align:center'>Este contenido es propiedad de la Red de Instituciones Financieras de Desarrollo. Si está pensando en hacer uso del mismo, por favor, cite la fuente. Todos los derechos reservados ®</p>
                    </div>
                </div>
                </footer>
            </div>
    </div>
</div>



<!--VENTANA EMERGENTE-->
<!--<div class="modal" id= "ventana1" data-backdrop="static">
        <div class="modal-dialog modal-lg">
                <div class="modal-content">
                        <div class="modal-header">
                                <button tyle="botton" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>  
                        </div>
                        <div class="modal-body">
                                <center>
                                <iframe class="iframeCerrar" id="iframeCerrar" scrolling="no"  name="iframeCerrar" width="0px" height="0px" src="http://rfd-bi.rfd.org.ec:8080/MicroStrategy/servlet/mstrWeb?evt=3008&src=mstrWeb.3008&xts=1575308751895"></iframe>
                                <iframe class="iframeCerrar" id="iframeCerrar" name="iframeID" width="0" height="0px" src="https://rfd-bi.rfd.org.ec/MicroStrategy/servlet/mstrWeb"></iframe>
                                <img width="200px" height="80px" class="imgPopup" src="{{ URL::asset('/imagenes/radar-logo-prueba.png') }}" title="INICIO"></center>
                                <center><h4>GRACIAS POR USAR NUESTRO RADAR <br><b>RFD<b></h4>
                                <br>
                                <a tyle="botton" class="btn btn-primary" data-dismiss="modal">Cancelar</a>  
                                <a href="{{url('/cerrar')}}" class="btn btn-primary"><img width="30px" height="30px" src="{{ URL::asset('/imagenes/cerrar.png') }}">Cerrar Programa</a>
                                <center>
                        </div>
                        <div class="modal-footer">
                                
                        </div>
                </div>
        </div>   
</div>

<div class="modal" id= "ventana2" data-backdrop="static">
        <div class="modal-dialog modal-lg">
                <div class="modal-content">
                        <div class="modal-header">
                                <img width="50px" height="50px" style="margin-top:-15px;" class="imgpopup" src="{{ URL::asset('/imagenes/radar_icono6.ico') }}">
                                <h6>MANUAL DE USUARIO RADAR-RFD</h6>
                                <button tyle="botton" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>  
                        </div>
                        <div class="modal-body">
                            <iframe id="iframePDF" name="iframePDF" width="100%" height="445px" src="{{URL::asset('../radar2/archivos/Manual de usuario RADAR.pdf')}}"></iframe>
                                
                        </div>
                </div>
        </div>
        
</div>


<script>
function checkForUpdate()
{
    if (window.applicationCache != undefined && window.applicationCache != null)
    {
        window.applicationCache.addEventListener('updateready', updateApplication);
    }
}
function updateApplication(event)
{
    if (window.applicationCache.status != 4) return;
    window.applicationCache.removeEventListener('updateready', updateApplication);
    window.applicationCache.swapCache();
    window.location.reload();
}
    
</script>-->




<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--SCRIPT PARA CAMBIAR LA PANTALLA PRINCIPAL-->
<script type="text/javascript"  src="{{asset('js/main.js') }}"></script>
<script type="text/javascript"  src="{{asset('js/rutas.js') }}"></script>
</body>
</html>