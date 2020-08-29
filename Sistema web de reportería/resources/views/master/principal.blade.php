@extends("welcome")

@section("encabezado")
<img src="{{URL::asset('/imagenes/radar-logo-prueba.png')}}"></center>
@endsection

@section("principal")
<div>
    <div class"row">
        <div class="row col-md-4">
            <div class="contenedores" id="primero">
                <h3><a href= "{{url('/reportes/')}}">CAPITULO1</a></h3>
                <img src="{{ URL::asset('/imagenes/icono1.png') }}" >
                <div id="descrip">
                    <p class="textodes"><center>HERRAMIENTA DEL CAPITULO UNO</center><br>
                    EN ESTE CAPITULO SE PUEDE VER INIDCADORES</p>
                </div>
            </div>
        </div>
        <div class="row col-md-4">
            <div class="contenedores" id="segundo"><h3><a href="{{url('/menu/')}}"> CAPITULO2</a></h3>
            <img src="{{ URL::asset('/imagenes/icono2.png') }}"></div>
            
        </div>
        <div class="row col-md-4">
            <div class="contenedores" id="tercero"><h3>CAPITULO3</h3>
            <img src="{{ URL::asset('/imagenes/icono3.png') }}">
                <div id="descrip">
                    <p class="textodes"><center>HERRAMIENTA DEL CAPITULO UNO</center><br>
                    EN ESTE CAPITULO SE PUEDE VER INIDCADORES</p>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div>
    <div class"row">
        <div class="row col-md-4">
            <div class="contenedores1" id="cuarto"><h3>CAPITULO4</h3>
            <div id="descrip">
                    <p class="textodes"><center>HERRAMIENTA DEL CAPITULO UNO</center><br>
                    EN ESTE CAPITULO SE PUEDE VER INIDCADORES</p>
                </div>
            </div>
        <div>
        <div class="row col-md-4">
        
            <div class="contenedores1" id="quinto"><h3>CAPITULO5</h3></div>
        </div>
        <div class="row col-md-4">
            <div class="contenedores1" id="sexto"><h3>CONOCENOS</h3>
            <div id="descrip">
                    <p class="textodes"><center>HERRAMIENTA DEL CAPITULO UNO</center><br>
                    EN ESTE CAPITULO SE PUEDE VER INIDCADORES fasdfa</p>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection