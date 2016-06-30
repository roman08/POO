<?php 

    class Pagina {
        
        //Atributos
        public $nombre = "Codigo Facilito";
        public static $url = "www.codigofacilito.com";
        
        //Metodos
        public function bienvenida() {
            /*
            Los atributos static solo pueden ser accedidos con la clase self::$url ó la clase contenedora Pagina::$url
             */
            echo "!Bienvenido a: <b>" . $this->nombre . "</b>, La direccion web es: <b>" . self::$url . "</b><br>";
        }
        
        public static function bienvenida2() {
            echo "!Bienvenido, la direccion es: <b>" . self::$url . "</b><br>";
        } 
    }

    class Web extends Pagina {

    }

    $pagina = new Pagina();
    $pagina->bienvenida();
    /*
    Para acceder a un metodo static no es necesario crea un objeto se puede acceder directamente con la clase contenedora
            Pagina::bienvenida2();

    De igual manera se pueden acceder a los atributos y metodos static heredados de una clase.
            Web::bienvenida2();
     */
 ?>