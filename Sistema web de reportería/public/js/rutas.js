/*-----------------------------

    MENÚ ACORDION

-----------------------------*/

$(document).ready(function(){
    
    $('.submenu1 li:has(ul)').click(function(e){
        e.preventDefault();
            if($(this).hasClass('activado1')){
                $(this).removeClass('activado1');
                $(this).children('ul').slideUp();
                console.log('desde if')
            }else{
                $('.submenu1 li ul').slideUp();
                $('.submenu1 li').removeClass('activado1');
                $(this).addClass('activado1');
                $(this).children('ul').slideDown();
                console.log('desde else')
            }
    });
});




/*************************

    INFORMACIÓN FINANCIERA
    
**************************/


function sendUrl1(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl2(){
    document.getElementById('iframeID').src="aqui la ruta del reporte"
}

function sendUrl3(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl4(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl5(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl6(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl7(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl8(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}


/************************
     MERCADO
************************/ 

function sendUrl9(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl10(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}


function sendUrl11(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}


function sendUrl12(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

/*************************


    INFORMACIÓN ECONOMICA
    
**************************/

function sendUrl13(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
 }

function sendUrl14(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl15(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}
                                             

/*************************
    INCLUSIÓN
**************************/ 
function sendUrl16(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl17(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl18(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}


/************************
     Social
************************/ 
function sendUrl19(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl20(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl21(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl22(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl23(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}




/*************************
 *  
 *  PUBLICAS
 * 


    INFORMACIÓN ECONOMICA
    
**************************/

function sendUrl24(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
 }

function sendUrl25(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl26(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

/*************************
    INCLUSIÓN
**************************/ 
function sendUrl27(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl28(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}

function sendUrl29(){
    document.getElementById('iframeID').src="aqui la ruta del reporte";
}


/*IMAGEN DE BLOQUEO DE CONTENIDO*/ 
function sendUrl30(){
    document.getElementById('iframeID').style="background-image: url(../radar2/imagenes/radar_fondo_capitulos6.png);";
}
