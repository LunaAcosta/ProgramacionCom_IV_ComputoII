<?php
    // Creamos nuestra interfaces para  valante 
    interface IVolante {
        public function girar();
    }

    // creamos nuestra interfaz para pito
    interface IPito{
        public function pitar();
    }

    // creamos nuestra clase de coche 

    class Coche implements IVolante, IPito {
        private $girar;
        private $pito;

        // creamos el constructor de la clase 
        function __construct($girar, $pito){
            $this -> girar = $girar;
            $this -> pito = $pito;
        }

        //creamos nuestros metodos 

        public function girar(){
            return $this -> girar;
        }

        public function pitar(){
            return $this -> pito;
        }
    }

    // creamos los objetos 
    $coche = new Coche("Giro: Izquierda","Pito: pip pip pip");
    echo $coche -> girar();
    echo $coche -> pitar();

?>
