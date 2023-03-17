<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>DATOS PERSONALES</title>
</head>
<body>
    <!-- Inializo mi etiqueta php  -->
    <?php
    // Creo mi array que contendra mis datos 
    $datos = array(
        array('nombre' => 'Kevin Alexander', 'lugar' => 'San Luis', 'edad' => 20, 'codigo' => 'SMIS00' ),
        array('nombre' => 'Cesar Jacob', 'lugar' => 'Santa Rosa', 'edad' => 22, 'codigo' => 'SMIS00' )
    );

    // Creo mi tabla donde iran mis datos 

    $tabla = '<table class="table mi">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Lugar</th>
      <th scope="col">Edad</th>
      <th scope="col">Codigo</th>
    </tr>';

    foreach($datos as $persona) {
        $tabla .='<tr>';
        $tabla .='<td>' . $persona['nombre'] .'</td>';
        $tabla .='<td>' . $persona['lugar'] .'</td>';
        $tabla .='<td>' . $persona['edad'] .'</td>';
        $tabla .='<td>' . $persona['codigo'] .'</td>';

        $tabla .= '</tr>';
    }
    $tabla .= '</table>';

    // Imprimos nuestro datos en la tabla
    echo $tabla;
    ?>

    <!-- Agrega la referencia a los archivos JavaScript de Bootstrap (jQuery primero, luego Popper.js y Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>
</html>