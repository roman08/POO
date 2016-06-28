<?php 
    //Ejercicio que guarda y muestra el nombre y apellido de una o varias personas.
    class Persona {
        //atributos de la clase persona
        public $nombre = array();
        public $apellido = array();
        //metodos de la clase persona
        public function guardar($nombre, $apellido) {
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;
        }
         public function mostrar() {
            //ciclo para mostrar los datos del array llamando la function formato().
            for ($i=0; $i < count($this->nombre); $i++) { 
                $this->formato($this->nombre[$i], $this->apellido[$i]);
            }
        }
        //Funcion para dar formato de salida a cada registro del array enviado desde la function mostrar().
        public function formato($nombre, $apellido) {
            echo "Nombre: " . $nombre . " | Apellido: " . $apellido . "<br>"; 
        }
       
    }
    //creamos el objeto persona
    $persona = new Persona();
    //Enviamos varios parametros
    $persona->guardar("Roman", "Alberto");
    $persona->guardar("ALberto", "Peralta");
    //Invocamos el metos mostrar para visualizar en pantalla los datos guardados.
    $persona->mostrar(); 
 ?>