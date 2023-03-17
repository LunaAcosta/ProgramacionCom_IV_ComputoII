<?php

   // Definimos nuestra constante FILE
   define("FILE", "datos-txt");

   // Creamos la funcion para listar nuestros datos 

   function getData(){
      // Le indicamos que si el archivo no existe que lo cree
      // la funcion !file_exists se utiliza para comprobar si un archivo o directorio existe en el sistema de archivos

      if(!file_exists(FILE)){
         // la funcion file_put_contents se utiliza para escribir datos en un archivo
         // esta toma dos argumentos primero la ruta del archivo y luego los datos que se quieres escribir 
         file_put_contents(FILE,''); 
      }

      // Obtenemos los datos del archivo
      //La funcion file_get_contents  se utiliza para leer el contenido de un archivo y que lo devuelva como cadena 
      $data = file_get_contents(FILE);
      // json_decode se utiliza para decodificar una cadena de texto que contie formato JSON
      $data = json_decode($data, true);

      // si los datos no son array , que lo inicialize 

      if(!is_array($data)){
         $data = array();
      }
      return $data;
   }

   //funcion para guardar los datos 

   function saveData($name, $lastname, $age){
      // se obtienen los datos que se tienen del archivo
      $data = getData();

      //creamos un nuevo registro 

      $record = array(
          "name" => $name,
          "lastname" => $lastname,
          "age" => $age
      );
      //agregamos el nuevo registro nuestro archivo
      $data[] = $record;
      // convertirmos nuestro registro a formato JSON
      $data = json_encode($data);
      file_put_contents(FILE, $data);
   }

   //funcion para editar nuestro registros 

   function updateDate($cod, $name, $lastname, $age){

      //obtenemos los datos que se van a actualizar 

      $data = getData();

      // actualizamos los datos 

      $data[$cod]['name'] = $name;
      $data[$cod]['lastname'] = $lastname;
      $data[$cod]['age'] = $age;

      // convertirmos nuestro datos a formanto a JSON

      $data = json_encode($data);
      file_put_contents(FILE, $data);
   }

   // funcion pata eleminir

   function deleteData($cod){
      // pasamos los datos 
      $data = getData();

      // eliminamor el resgistro

      unset($data[$cod]);

      // reindireczamos los datos 

      $data = array_values($data);

      // convertirmos a formato JSON  y guardar 

      $data =json_encode($data);
      file_put_contents(FILE, $data);

   }
?>