<?php 
    class Vehiculo {
        //Atributos
        public $motor = false;
        public $marca;
        public $color;

        //Metodos
        public function estado() {
            if ($this->motor) {
                echo "El motor esta encendido <br>";
            }else {
                echo "El motor esta apagado<br>";
            }
        }

        public function encender() {
            if ($this->motor) {
                echo "El motor ya encuentra encendido<br>";
            }else {
                echo "El motor esta siendo encendido<br>";
                $this->motor = true;
            }
        }
    }
    //Realizamos la herencia de la clase vehiculo
    class Moto extends Vehiculo {
        public function estadoMoto() {
            $this->estado();
        }
    }

    $vehiculo = new Vehiculo();
    $vehiculo->estado();
    $vehiculo->encender();

    /*
    La clase moto hereda los atributos y metodos de la clase Vehiculo

    $vehiculo = new moto();
    $vehiculo->estadoMoto();
     */
 ?>