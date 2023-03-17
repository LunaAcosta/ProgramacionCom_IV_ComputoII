<?php 
    // vamos a incluir los archivos de la funciones 
    include "funtion.php";

    // vamos a obtener las informoacion que de va a relizar 
    $action = $_POST['action'];
    

    // vamos a obtener los valores del formulario
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    // evaluamos las actiones que se van a reliar 
    if($action == "guardar"){
        // lo que va a hacer es guardar  los datos en el array
        saveData($name, $lastname, $age);
        // luego de  eso vamos a redireccionar a 
        header ('Location: index.php');
    }

    // evaluamos la action de  editar nuestro registros
    if($action == "editar"){
        $cod = $_POST['cod'];
        // y actualizamos los datos 
        updateDate($cod, $name, $lastname, $age);

        // una ves actualizamos nuestro registro vamos a redireccionar 
        header ('Location: index.php');
    }

    //  evaluamos la accion de eliminanr 
    if ($action == "eliminar"){
        $cod = $_POST['cod'];
        // mandamos a traer nuestra funcion que hemos creado para borra y le pasamos el $cod de nuestro registro que deseamos borrar 
        deleteData($cod);
        // una ves eliminemos nuestro registro que nor redireciones a index.php
        header ('Location: index.php');
    }
?>
