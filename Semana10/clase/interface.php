<?php
  // creamos nuestra interfaces

  interface IMascota{
    public function getNombre();
    public function getEdad();
  }

  interface IMamifero{
    public function getSonido();
  }

  // implementamos la interfaces creada en nuestra clase 

  class Gato implements IMascota, IMamifero {
    private $nombre;
    private $edad;

    function __construct($nombre, $edad, $sonido){
        $this -> nombre = $nombre;
        $this -> edad = $edad; 
        $this -> sonido = $sonido;
    }

    public function getNombre(){
      
        return $this -> nombre;
    }

    public function getEdad(){
        return $this -> edad;
    }

    public function getSonido(){
        return $this -> sonido;
    }
  }

  $gato = new Gato("Misifus ", "29 ", "Miaaaaaauuu");
  echo $gato -> getNombre();
  echo $gato -> getEdad();
  echo $gato -> getSonido();

  echo "<br/>";

  $gato1 = new Gato("Chupete ", "2", " chuuuuuiiiii");
  echo $gato1 -> getNombre();
  echo $gato1 -> getEdad();
  echo $gato1 -> getSonido();

 
?>