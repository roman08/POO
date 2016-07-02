<?php 
    
    function autoload($clase) {
        include "../Class/" . $clase . ".php";
    }

    //Auto-carga las clases
    spl_autoload_register('autoload');

    //Realizmos el llamado de la clase con su respctivo metodo
    Persona::mostrar('Hola mundo');
    Auto::mostrar('F1');

    /*
        //Tambien podemos crear un objeto llamando la clase
        $obj = new Persona();
        $obj->mostrar('Hola mundo');
     */
 ?>