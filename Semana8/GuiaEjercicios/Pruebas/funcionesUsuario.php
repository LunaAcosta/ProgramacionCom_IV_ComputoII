<?php
   // funciones definidas por el usuario
   

   // funcion de colores, tendra un valor predeterminado verde 

   function colores($colores = "Blanco"){
    return "<p> Su color favorito es: $colores</p>";
   }

   // pasamos un valor como un parametro
   echo colores("Negro");

   // sino se pasa un valor como argumento
   // tomara el valor por defecto
   echo colores();

   // valores por defectos 

   function saludos($nombre){
    $nombre .= "Buenas tardes";
   }
   $nombre ="Yascis Yasmin";
   saludos($nombre);
   echo $nombre ."<br/><br/>";

   // declaramos un arreglo llamdo fruta
   $fruta = array("Manzana", "Pera", "Uva");

   // creamos una funcion llamada frutas y pasaremos un argumento fruta 

   function frutas($fruta){
     //llamando al arreglo de fruta y agregamos una fruta al arreglo
     array_push($fruta, "Mango");
   }
   // llamando a la funcino fruta 
   frutas($fruta) ."<br/>";
   //var_dump($fruta) ."<br/>";

   // por referencia

   // ahora que el argumento pasa por referencia 
   // anteponiendole el simbolo &

   

   function saludo(&$nombre){
       $nombre .= ", Buenas tardes";
   }
   $nombre = "Yascis Yasmin";
   saludo($nombre);
   echo $nombre  ."<br/><br/>";

   // funciones anonimas

   // definimos una funcion anonima 

   $saludo = function(){
    return "hola mundo";
   };
   echo $saludo()."<br/><br/>";

   // añadiendo la funcion en otra

   function saludosss($saludar){
      echo $saludar()."<br/><br/>";
    }

   saludosss(function(){
    return "Buenos dias";
   });


   // clausuras 

   $color = "Azul";
   $mostrar = function() use($color){
    echo "Su color favorito es: $color"."<br/><br/>";
   };
   $mostrar();

   // Si se quiere alterar 

   $colorA = "Azul";

   $mostrarr = function() use(&$colorr){
    echo $colorr = "Verde"."<br/><br/>";
   };
   $mostrarr();
   echo $colorr; // mostrara el azul    


   // funciones anonimas callbacks
   $saludo = function($nombre){
    printf("Hola ". $nombre);
   };
   $saludo("Andrea "); 
   call_user_func($saludo, " Amigo");


   // declaraciones de tipo
   /*
   function saludo(array $nombre){
     echo "Hola" .join(" ",$nombre);
   }
   saludo(["Carmen", "Jose"]);
   */

   // declaraciones de tipo de evolucion 
   function suma($num1, $num2):int{
     return $num1 + $num2;
   }

   var_dump(suma(6,7));










?>