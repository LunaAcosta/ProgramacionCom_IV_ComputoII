<?php
    // para evaluar se estan enviando los valores 
    if(isset($_POST["enviar"])){
        // declaracion de variables 
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        // evalua la operacion selecinada (strtolower para convertir un string a minuscula)
        $operacion = strtolower($_POST["operaciones"]);
        // Operaciones que se va a realizar 
        $operaciones = array("suma", "resta", "multiplicacion", "division");

        // Evalua si la operacion seleccionan esta dentro del array  $operaciones si no
        // esta en el array imprimira el mensaje

        if(!in_array($operacion, $operaciones)){
            echo "La operacion selecionada no es validad";
            exiit();
        }

        //  la estructura switch nos sirve para realizar multiplis comprobaciones

        // Operaciones a realizar 
        switch($operacion){
            case "suma":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacion":
                $resultado = $num1 * $num2;
                break;
            case "division":
                if($num2 == 0){
                    echo "No se puede dividir entre cero";
                    break;
                }
                $resultado = $num1 / $num2;
                break;
        }
        // Para imprimir los resultados 
       echo "El resultado de la $operacion entre $num1 y $num2 es igual a : $resultado";

    }
?>