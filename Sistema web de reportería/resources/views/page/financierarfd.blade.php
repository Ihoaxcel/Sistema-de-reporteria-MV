@extends ('master.menu')

@section('logoCentral')
    <a class="logotipoMenu" href="{{url('/')}}">
        <img class="logotipoMenu" src="{{ URL::asset('/imagenes/radar_icono0.png') }}" title="INICIO">
        <p class="textoInicio">INICIO</p>
    </a>
@endsection

@section('menu')
<!--<li class="activado">
    <img class="icono izquierdo material-icons" src="{{ URL::asset('/imagenes/radar_icono1.ico') }}">
    <p class="texto"><a href="{{url('/financiera')}}">Financiera</a></p>
    <i class="icono derecho material-icons">keyboard_arrow_down</i>
        <ul class="submenu" id ="submenu">
            
            <li class="lisubmenu"><a onclick="sendUrl1();" >Suficiencia del Patrimonio</a></li>
            <li class="lisubmenu"><a onclick="sendUrl2();" >Estructura de cartera y morosidad</a></li>
            <li class="lisubmenu"><a onclick="sendUrl3();">Eficiencia y gestión operativa</a></li>
            <li class="lisubmenu "><a onclick="sendUrl4();">Rentabilidad y rendimiento</a></li>
            <li class="lisubmenu "><a onclick="sendUrl5();">Costo y liquidez</a></li>
            <li class="lisubmenu "><a onclick="sendUrl6();">Balance y E.R</a></li>
            <li class="lisubmenu "><a onclick="sendUrl7();">Rankings</a></li>
            <li class="lisubmenu "><a onclick="sendUrl8();">Cartera y Ahorro miembros RFD</a></li>
        </ul>
</li>-->

<li class="activado">
    <img class="icono izquierdo material-icons" src="{{ URL::asset('/imagenes/radar_icono1.ico') }}">
    <p class="texto">Financiera</p>
    
        <ul class="submenu" id ="submenu">
            <!--<li class="lisubmenu liprimero"><a href="{{ URL::to('http://www.google.com') }}" >Suficiencia del Patrimonio</a></li>-->
            <li class="lisubmenu"><a onclick="sendUrl1();">Suficiencia del Patrimonio</a></li>
            <li class="lisubmenu"><a onclick="sendUrl2();">Estructura de cartera y morosidad</a></li>
            <li class="lisubmenu"><a onclick="sendUrl3();">Eficiencia y gestión operativa</a></li>
            <li class="lisubmenu "><a onclick="sendUrl4();">Rentabilidad y rendimiento</a></li>
            <li class="lisubmenu "><a onclick="sendUrl5();">Costo y liquidez</a></li>
            <li class="lisubmenu "><a onclick="sendUrl6();">Balance y E.R</a></li>
            <li class="lisubmenu "><a onclick="sendUrl7();">Rankings</a></li>
            <li class="lisubmenu "><a onclick="sendUrl8();">Cartera y Ahorro miembros RFD</a></li>
        </ul>
</li>

<div class="subMenuLateral">
    <ul class="submenu1">
            <!--<li class="">
                <img class="icono1 izquierdo material-icons1" src="{{ URL::asset('/imagenes/radar_icono1.ico') }}">
                <p class="texto1">Financiera</p>
                <i class="icono1 derecho material-icons">keyboard_arrow_down</i>
                    <ul class="subItems">
                        <li class="lisubmenu1"><a onclick="sendUrl1();" >Suficiencia del Patrimonio</a></li>
                        <li class="lisubmenu1"><a onclick="sendUrl2();" >Estructura de cartera y morosidad</a></li>
                        <li class="lisubmenu1"><a onclick="sendUrl3();">Eficiencia y gestión operativa</a></li>
                        <li class="lisubmenu1"><a onclick="sendUrl4();">Rentabilidad y rendimiento</a></li>
                        <li class="lisubmenu1"><a onclick="sendUrl5();">Costo y liquidez</a></li>
                        <li class="lisubmenu1"><a onclick="sendUrl6();">Balance y E.R</a></li>
                        <li class="lisubmenu1"><a onclick="sendUrl7();">Rankings</a></li>
                        <li class="lisubmenu1"><a onclick="sendUrl8();">Cartera y Ahorro miembros RFD</a></li>
                    </ul>
            
            </li>-->

            <li class="">
                <img class="icono1 izquierdo material-icons1" src="{{ URL::asset('/imagenes/radar_icono2.ico') }}">
                <p class="texto1">Mercado</p>
                <i class="icono1 derecho material-icons">keyboard_arrow_down</i>
                <ul class="subItems">
                    <li class="lisubmenu1"><a onclick="sendUrl9();">Captaciones</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl10();">Colocaciones</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl11();">Volumen</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl12();">Tasas de interés</a></li>
                </ul>
            </li>
            
            
            
            <li class="">
                <img class="icono1 izquierdo material-icons1" src="{{ URL::asset('/imagenes/radar_icono4.ico') }}">
                <p class="texto1">Desempeño Social</p>
                <i class="icono1 derecho material-icons">keyboard_arrow_down</i>
                <ul class="subItems">
                    <li class="lisubmenu1"><a onclick="sendUrl19();">Productos adecuados I</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl20();">Productos adecuados II</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl21();">Trato responsable a clientes</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl22();">Trato responsable a empleados</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl23();">Equilibrio financiero y social</a></li>
                </ul>
            </li>
            
            
            <li class="">
                <img  class="icono1 izquierdo material-icons" src="{{ URL::asset('/imagenes/radar_icono3.ico') }}">
                <p class="texto1">Económica</p>
                <i class="icono1 derecho material-icons">keyboard_arrow_down</i>
                <ul class="subItems">
                    <li class="lisubmenu1"><a onclick="sendUrl13();">Empleo y Sectores económicos</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl14();">Inflación</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl15();">Exportaciones e importaciones</a></li>
                </ul>  
            </li>

            <li class="">
                <img class="icono1 izquierdo material-icons" src="{{ URL::asset('/imagenes/radar_icono5.ico') }}">
                <p class="texto1">Inclusión Financiera</p>
                <i class="icono1 derecho material-icons">keyboard_arrow_down</i>
                <ul class="subItems">
                    <li class="lisubmenu1"><a onclick="sendUrl16();">Global Findex</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl17();">Microscopio global</a></li>
                    <li class="lisubmenu1"><a onclick="sendUrl18();">ENEMDU acceso-uso</a></li>
                </ul>
            </li> 
    </ul>
    

</div>

@endsection

@section('contenido')
    <!--<h1 id="capitulo">DESDE FINACIERA</h1>-->
    <iframe id="iframeID" name="iframeID" width="100%" height="680px" style="background-image: url(../public/imagenes/radar_fondo_capitulos1.png);background-size: 100% 100%;background-position: 30px 110px;">
    </iframe>
@endsection


