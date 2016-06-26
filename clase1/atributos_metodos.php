<?PHP
    class Persona(){
        //Atributo
            public $nombre = "Roman madrigal";
        //Metodos
            public function hablar($mensaje = null) {
                echo $mensaje;
            }
    }

    //creamos el nuevo objetos de la clase persona usando la palabra resevada new la cual asigna una clase a una variable para crear el objeto.
    $persona = new Persona();
    echo $persona->nombre;

    $persona->hablar('hola POO');
    
?>