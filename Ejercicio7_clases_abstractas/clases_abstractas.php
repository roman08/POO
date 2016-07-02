<?php 
    //Declaramos la abstracta Molde
    abstract class Molde {

        abstract public function ingresarNombre($nombre);
        abstract public function obtenerNombre(); 

    }
    //La clase Persona hereda de la clase abstracta Molde la cual le obliga a usar los metos heredados 
    class Persona extends Molde {

        private $mensaje = "Hola codigofacilito";
        private $nombre;

        public function mostrar() {
            print $this->mensaje;
        }

        public function ingresarNombre($nombre, $apellido = "") {
            $this->nombre = $nombre . " " . $apellido;
        }

        public function obtenerNombre() {
            print $this->nombre;
        }
    }

$obj = new Persona();
$obj->ingresarNombre('Roman', "Madrigal");
$obj->obtenerNombre();
 ?>