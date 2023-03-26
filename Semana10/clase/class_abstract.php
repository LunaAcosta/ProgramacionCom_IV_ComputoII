<?php
    // clases abstracta  siempre se definen con la palabras abstract
    abstract class Mascota{
        public $nombre;

        // definimos un metodo
        public function saludar(){
            echo "Funcion no abstracta";
        }

        // definimos un metodo abstracto
        abstract function getNombre();
    }

    // establecemos la herencia

    class Gato extends Mascota{

        public function getNombre(){
            return $this -> nombre;
        }
    }

    // creamos nuestro objeto

    $gato = new Gato();
    $gato -> nombre = "Bronco";
    echo $gato -> saludar()."<br/>";
    echo $gato -> getNombre();


?>
