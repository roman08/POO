<?php 
    class Facebook {
        //Atributos
        public $nombre;
        public $edad;
        //atributo private solo puede accedido por metodos que pertenecen a la  misma clase que el atributo
        private $pass;

        //Metodos
        
        public function __construct($nombre, $edad, $pass) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pass = $pass;
        }
        
        public function verInformacion($pass) {
            echo "Nombre: " . $this->nombre ."<br>";
            echo "Edad: " . $this->edad . "<br>";
            echo "Password actual: " . $this->pass . "<br>";
            //accedemos al atributo pass para relaizar el cambio de password
            $this->pass = $pass;
            echo "Nueva Password: " . $this->pass;
        }
    }
    //creamos el nuevo objeto
    $facebook = new Facebook("Roman madrigal" , 27, "Varekay");
    //mostramos la informacion cambiando la contraseña
    $facebook->verInformacion("Nueva Pass");
    
    /*
    Si tratamos de acceder al atributo $pass no devolvera un error ya que solo se puede acceder desde la misma clase
    echo $this->pass;
     */

 ?>