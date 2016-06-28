<?php 
    class Loteria {
        //atributos de la clase
        public $numero;
        public $intentos;
        public $resultado = false;
        //metodos de la clase
        public function __construct($numero, $intentos) {
            $this->numero = $numero;
            $this->intentos = $intentos;
        }

        public function sortear() {
            $minimo = $this->numero / 2;
            $maximo = $this->numero * 2;
            for ($i=0; $i < $this->intentos; $i++) { 
                $int = rand($minimo, $maximo);
                self::intentos($int);
            }
        }

        public function intentos($int) {
            if ($int == $this->numero) {
                echo "<b>" . $int . "==" . $this->numero . "</b><br>";
                $this->resultado = true;
            }else {
                echo $int . "!=" . $this->numero . "<br>";
            }    
        }

        public function __destruct(){
            if ($this->resultado) {
                echo "!Felicidades, has gando en <b>" . $this->intentos . "</b> intentos";
            }else {
                echo "Lo siento, has perdido en <b>" . $this->intentos . "</b> intentos";
            }
        }
    }

    $loteria = new Loteria(5,10);
    $loteria->sortear();
 ?>