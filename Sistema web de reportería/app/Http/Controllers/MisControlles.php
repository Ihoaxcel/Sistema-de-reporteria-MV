<?php

namespace App\Http\Controllers;

class MisControlles extends Controller{

    public function inicio(){
        return view('welcome');
    }

    public function reportes(){
        return view('master.menu');
    }
    
    




    /*********************************************************
        
        CONTROLADORES DE LOS CAPITULOS DE LA HERRAMIENTA RADAR2
    
    **********************************************************/
    public function financiera(){
        return view('page.financierarfd');
    }

    public function economica(){
        return view('page.economicarfd');
    }

    public function inclusion(){
        return view('page.inclusionrfd');
    }

    public function desempenio(){
        return view('page.desempeniorfd');
    }

    public function mercado(){
        return view('page.mercadorfd');
    }
    
    public function cerrar(){
        return redirect('http://rfd.org.ec');
    }
    
    public function cerrarPublico(){
        return view('page.cerrar');
    }
    
    
    
    /*********************************************************
        
        CONTROLADORES DE LOS CAPITULOS DE LA HERRAMIENTA RADAR2 VERSION2
    
    **********************************************************/
    public function menufinal(){
        return view('master1.welcome');
    }
    
    /*public function menu1(){
        return view('master1.menu');
    }
    
    
    public function financiera1(){
        return view('page1.financierarfd');
    }

    public function economica1(){
        return view('page1.economicarfd');
    }

    public function inclusion1(){
        return view('page1.inclusionrfd');
    }

    public function desempenio1(){
        return view('page1.desempeniorfd');
    }

    public function mercado1(){
        return view('page1.mercadorfd');
    }
    
    public function cerrar1(){
        //return view('page.cerrarsesionrfd');
        return redirect('http://rfd.org.ec');
    }
    
    /*public function cerrarPublico(){
        return view('page.cerrar');
    }*/
    
}