<?php 
    //Intefaces
    interface Auto {
        public function encender();
        public function apagar();
    }
    //La interface extiende o hereda de la interface Auto
    interface gasolina extends Auto {
        public function vaciarTanque();
        public function llenarTanque($cant);
    }
    /*
        La clase Deportivo tiene implimenteda la interface gasolina, para que la clase sea valida recordemos que tenemos que declarar todos los metodos de las interfaces
     */
    class Deportivo implements gasolina{
        
        //Atributos
        private $estado = false;
        private $tanque = 0;

        //Metodos
        public function estado() {
            if($this->estado) {
                echo "El auto esta encendido, tiene " . $this->tanque ." litros de gasolina <br>";
            }else {
                echo "El auto esta apagado <br>";
            }
        }

        public function encender() {
            if($this->estado) {
                print "No puedes enceder el auto 2 veces <br>";
            }else {
                if($this->tanque <= 0) {
                    print "Usted no puede endcender el auto, el tanque esta vacio <br>";
                }else {
                print "Auto encendido <br>";
                $this->estado = true;
                }
            }
        }

        public function apagar() {
                if($this->estado) {
                print "Auto apagado <br>";
                $this->estado = false;
            }else {
                print "El auto ya esta apagado<br>";
            }
        }

        public function vaciarTanque() {
            $this->tanque = 0;
        }

        public function llenarTanque($cant) {
            $this->tanque = $cant;
        }

        public function usar($km) {
            if($this->estado) {
                $reducir = $km / 3;
                $this->tanque = $this->tanque - $reducir;
                    if($this->tanque <= 0) {
                        $this->estado = false;
                    }
            }else {
                print "El auto esta apagado y no se puede usar <br>";
            }
        }
    }
    $obj = new Deportivo();
    $obj->llenarTanque(100);
    $obj->encender();
    $obj->usar(380);
    $obj->estado();
 ?>