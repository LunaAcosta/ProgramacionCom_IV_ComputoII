<?php
    // defino mi interfaces
    interface Iidentificacion{
      public function getidentificacion();
    }

    // clase padre Persona  
    abstract class Persona implements Iidentificacion{

      // definimos sus atributos
      public $dni;
      public $nombre;
      public $edad;

      // declaramos nuestro metodo constructor
      function __construct($dni, $nombre, $edad){
         $this -> dni = $dni;
         $this -> nombre = $nombre;
         $this -> edad = $edad;
      }

      //  definimos un metodo 

      public function getidentificacion(){
         $datos = "
         
         <h3>DATOS DE REGISTRO: </h3>
         DNI: {$this -> dni} <br>
         NOMBRE: {$this -> nombre} <br>
         EDAD : {$this -> edad} <br>
         ";
         return $datos;
      }
    }

    // definimos nuestra clase Vehiculo 
    abstract class Vehiculo implements Iidentificacion{

      // definimos sus atributos 
      public $matricula;
      public $marca;
      public $modelo;

      // declaramos nuestro metodo constructor para la clase de Vehiculo 
      function __construct($matricula, $marca, $modelo){
         $this -> matricula = $matricula;
         $this -> marca = $marca;
         $this -> modelo = $modelo;
      }

      // definimos un metodo 
      public function getidentificacion(){

         $datos = "
         <h3>DATOS DE REGISTRO</h3>
         MATRICULA: {$this -> matricula} <br>
         MARCA: {$this -> marca} <br>
         MODELO: {$this -> modelo} <br>
         ";
         return $datos;
      }
    }
?>