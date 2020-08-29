<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

        <link href="{{ URL::asset('css/encabezado.css') }}" rel="stylesheet" type="text/css" >
        
        <link rel="shortcut icon" href="{{ URL::asset('/imagenes/superior.png') }}" />

        <title>RADAR 2</title>


        
</head>
<body>
<div class="principal-contenedor">
<div class="contenedor_menu" id="contenedor_menu">
        <ul class="menu">
                <li>
                    <a class="iconos" href="{{url('/reporte')}}"><i class="icono izquierdo material-icons">start</i></a>
                </li> 

                <li>
                    <a class="iconos" href="{{url('/reporte')}}"><i class="icono izquierdo material-icons">reorder</i></a>
                </li>

                <li>
                    <a class="iconos" href="{{url('/reporte')}}"><i class="icono izquierdo material-icons">home</i></a>
                    <p class="texto">INICIO</p> 
                </li>      
        <li>
                    <a class="iconos" href=""><i class="icono izquierdo material-icons">assessment</i></a>
                    <p class="texto">INCLUSIÓN SOCIAL</p><i class="icono derecho material-icons">keyboard_arrow_down</i>
                        <ul class="submenu">
                                <li class="lisubmenu liprimero"><a onclick="sendUrl1();" >Calidad de Activos</a></li>
                                <li class="lisubmenu"><a onclick="sendUrl2();" >Suficiencia Patrimonial</a></li>
                                <li class="lisubmenu"><a onclick="sendUrl3();">Cartera de Riesgo</a></li>
                                <li class="lisubmenu liultimo"><a onclick="sendUrl4();">Patrimonio por tipo de entidad</a></li>
                        </ul>
                </li>
                <li>
                    <a class="iconos" href="#"><i class="icono izquierdo material-icons">table_chart</i></a>
                    <p class="texto">CAPITULO2</p><i class="icono derecho material-icons">keyboard_arrow_down</i>
                        <ul class="submenu">
                                <li class="lisubmenu liprimero"><a onclick="sendUrl5();">Creditos por organizaci贸n</a></li>
                                <li class="lisubmenu"><a onclick="sendUrl6();">Saldo de cartera por organizaci贸n</a></li>
                                <li class="lisubmenu"><a href="#">Sub 23</a></li>
                                <li class="lisubmenu liultimo"><a href="#">Sub 24</a></li>
                        </ul>
                </li>
                
                
                <li>
                    <a class="iconos" href="#"><i class="icono izquierdo material-icons">developer_board</i></a>
                    <p class="texto">CAPITULO3</p><i class="icono derecho material-icons">keyboard_arrow_down</i>
                        <ul class="submenu">
                                <li class="lisubmenu liprimero"><a href="#">Sub 31</a></li>
                                <li class="lisubmenu"><a href="#">Sub 32</a></li>
                                <li class="lisubmenu"><a href="#">Sub 33</a></li>
                                <li class="lisubmenu liultimo"><a href="#">Sub 34</a></li>
                        </ul>
                </li>
                <li>
                    <a class="iconos" href="#"><i class="icono izquierdo material-icons">pie_chart</i></a>
                    <p class="texto">CAPITULO4</p><i class="icono derecho material-icons">keyboard_arrow_down</i>
                        <ul class="submenu">
                                <li class="lisubmenu liprimero"><a href="#">Sub 41</a></li>
                                <li><a href="#">Sub 42</a></li>
                                <li><a href="#">Sub 43</a></li>
                                <li class="lisubmenu liultimo"><a href="#">Sub 44</a></li>
                        </ul>
                </li>
                <li>
                    <a class="iconos" href="#"><i class="icono izquierdo material-icons">wifi_tethering</i></a>
                    <p class="texto">CAPITULO5</p><i class="icono derecho material-icons">keyboard_arrow_down</i>
                        <ul class="submenu">
                                <li class="lisubmenu liprimero"><a href="#">Sub 41</a></li>
                                <li class="lisubmenu"><a href="#">Sub 42</a></li>
                                <li class="lisubmenu"><a href="#">Sub 43</a></li>
                                <li class="lisubmenu liultimo"><a href="#">Sub 44</a></li>
                        </ul>
                </li>
                <li><a class="iconos" href="#"><i class="icono izquierdo material-icons">contact_mail</i></a>
                    <p class="texto">Contactanos</p>
                </li>
        </ul>
</div>
</div>


<div class="pantalla_central"><br><center></center><br>
<center><img class="logorfd" src="{{ URL::asset('/imagenes/radar-logo-prueba.png') }}"></center>
<br><br>

<iframe id="iframeID" name="iframeID" width="90%" height="700px" src="http://rfd-bi.rfd.org.ec:8080/MicroStrategy/servlet/mstrWeb?evt=3186&src=mstrWeb.3186&subscriptionID=B4889DD441E41C27E226869D9950990F&Server=WIN-TJB647Q4BIL&Project=RADAR&Port=0&share=1&hiddensections=header,path,dockTop,dockLeft,footer"></iframe>

</div>



<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript"  src="{{asset('js/main.js') }}"></script>
</body>
</html>