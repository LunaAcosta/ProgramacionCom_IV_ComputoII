<?php
   // creamos nuestra clase abstracta para nuestro instrumentos 

   abstract class Instrumento {
    // identificamos atributos de un instrumento 
    public $nombre;
    public $tipo;
 
    // asignamos un metodo para nuestra clase instrumento 
    public function tocar(){
        echo "<h1>Usted esta tocando </h1>";
    }

    public function tipoInstrumento(){
        echo "<h2>Tipo de instrumeno: </h2>";
    }
    

    // creamos nuestra funcion abstracta 
    abstract function getInstrumento();
    abstract function getTipo();
   }

   // HERENCIA DE CLASE 
   // creamos la clase guitarra heredada de la clase abstracta Instrumento 

   class Guitarra extends Instrumento{

    // llamamos a la funcion getInstrumento para obtener el nombre de instrumento
    public function getInstrumento(){
        // nos retornara el nombre de instrumento que estamos tocando
        return $this -> nombre;
    } 

    public function getTipo(){
        return $this -> tipo;
    }
   }

   // creamos la clase Sexofon heredada de la clase abstracta Instrumento 

   class Saxofon extends Instrumento{
    public function getInstrumento(){
        return $this -> nombre;
    }

    public function getTipo(){
        return $this -> tipo;
    }

   }

   // creamos la clase violin heredada de la clase abstracta Instrumento 
   class Violin extends Instrumento{

    public function getInstrumento(){
        return $this -> nombre;
    }

    public function getTipo(){
        return $this -> tipo;
    }

   }

   // creamos nuestro objetos 
   $guitarra = new Guitarra();
   $saxofon = new Saxofon();
   $violin = new Violin();

   $guitarra -> nombre = "<p>Guitarra</p>";
   $guitarra -> tipo = "<p>Instrumeto de cuerdas</p>";

   $saxofon -> nombre = "<p>Saxofon</p>";
   $saxofon -> tipo = "<p>Instrumento de aire</p>";


   $violin -> nombre = "<p>Violin</p>";
   $violin -> tipo = "<p>Instrumento de cuertas</p>";

   echo $guitarra -> tocar() , $guitarra -> getInstrumento();
   echo $guitarra ->  tipoInstrumento(), $guitarra ->  getTipo();
   

   echo "<br>";
   
   echo $saxofon -> tocar();
   echo $saxofon -> getInstrumento();
   echo $saxofon -> tipoInstrumento();
   echo $saxofon -> getTipo();

   echo "<br>";

   echo $violin -> tocar();
   echo $violin -> getInstrumento();
   echo $violin -> tipoInstrumento();
   echo $violin -> getTipo();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPO DE INSTRUMENTO</title>
    <style>
        *{
            margin: 10px;
            font-size: 30px;   
        }

        h1{
            color: purple;
            font-size: 60px;
        }
    </style>
</html>