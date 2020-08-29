@extends ('master.menu')

@section('logoCentral')
    <a class="logotipoMenu" href="{{url('/')}}">
        <img class="logotipoMenu" src="{{ URL::asset('/imagenes/radar_icono0.png') }}" title="INICIO">
        <p class="textoInicio">INICIO</p>
    </a>
@endsection

@section('menu')

<li class="activado">
    <!--<a class="rutaCap" href="{{url('/economica')}}">-->
        <img  class="icono izquierdo material-icons" src="{{ URL::asset('/imagenes/radar_icono3.ico') }}">
    <!--</a>-->
    <p class="texto"><a>Económica</a></p>
    <!--<i class="icono derecho material-icons">keyboard_arrow_down</i>-->
        <ul class="submenu">
            <li class="lisubmenu"><a onclick="sendUrl24();">Empleo y Sectores económicos</a></li>
            <li class="lisubmenu"><a onclick="sendUrl25();">Inflación</a></li>
            <li class="lisubmenu"><a onclick="sendUrl26();">Exportaciones e importaciones</a></li>
        </ul>
</li>

<div class="subMenuLateral">
    <ul class="submenu1 submenuBloc">
    
            <li class="">
                <img class="icono1 izquierdo material-icons" src="{{ URL::asset('/imagenes/radar_icono5.ico') }}">
                <p class="texto1"><!--<a href="{{url('/inclusion')}}">-->Inclusión Financiera<!--</a>--></p>
                <i class="icono1 derecho material-icons">keyboard_arrow_down</i>
                <ul class="subItems">
                    <li class="lisubmenu1"><a onclick="sendUrl27();">Global Findex</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl28();">Microscopio global</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl29();">ENEMDU acceso-uso</a></li>
                </ul>
            </li>
            
             <!--MENÚ DESAHABILITADO-->
            <li class="">
                <img class="icono1 izquierdo material-icons1 txtBloqueado" src="{{ URL::asset('/imagenes/radar_icono1.ico') }}">
                <p class="texto1 txtBloqueado">Financiera</p>
                <i class="icono1 derecho material-icons txtBloqueado">keyboard_arrow_down</i>
                    <ul class="subItems subTexto">
                        <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Suficiencia del Patrimonio</a></li>
                        <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Estructura de cartera y morosidad</a></li>
                        <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Eficiencia y gestión operativa</a></li>
                        <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Rentabilidad y rendimiento</a></li>
                        <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Costo y liquidez</a></li>
                        <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Balance y E.R</a></li>
                        <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Rankings</a></li>
                        <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Cartera y Ahorro miembros RFD</a></li>
                    </ul>
            
            </li>

            <li class="">
                <img class="icono1 izquierdo material-icons1 txtBloqueado" src="{{ URL::asset('/imagenes/radar_icono2.ico') }}">
                <p class="texto1 txtBloqueado">Mercado</p>
                <i class="icono1 derecho material-icons txtBloqueado">keyboard_arrow_down</i>
                <ul class="subItems subTexto">
                    <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Captaciones</a></li>
                    <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Colocaciones</a></li>
                    <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Volumen</a></li>
                    <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Tasas de interés</a></li>
                </ul>
            </li>
            <li class="">
                <img class="icono1 izquierdo material-icons1 txtBloqueado" src="{{ URL::asset('/imagenes/radar_icono4.ico') }}">
                <p class="texto1 txtBloqueado">Desempeño Social</p>
                <i class="icono1 derecho material-icons txtBloqueado">keyboard_arrow_down</i>
                <ul class="subItems subTexto">
                    <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Productos adecuados I</a></li>
                    <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Productos adecuados II</a></li>
                    <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Trato responsable a clientes</a></li>
                    <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Trato responsable a empleados</a></li>
                    <li class="lisubmenu1 txtBloqueado"><a onclick="sendUrl30();">Equilibrio financiero y social</a></li>
                </ul>
            </li>
    
    </ul>


</div>


@endsection
@section('contenido')
    <!--<h1 id="capitulo">DESDE INCLUSIÓN</h1>-->
    <iframe id="iframeID" name="iframeID" width="95.6%" height="680px" style="background-image: url(../public/imagenes/radar_fondo_capitulos3.png);">
    </iframe>
@endsection