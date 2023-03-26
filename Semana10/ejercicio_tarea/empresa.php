<?php
   require_once ("subclass_Propietario_cliente.php");
   require_once ("subclass_coche_motor.php");

   // objecto para propietario
   $propietario = new Propietario(23448858, "Kevin Alexander",21);
   $propietario -> setDireccion("Caserio Hatos II");

   echo $propietario -> tipo();
   echo $propietario -> getidentificacion();
   echo "DIRECCION: " .$propietario -> getDireccion();

   // objeto para cliente 

   $cliente = new Cliente(553979,"Ana Isabel", 40);
   $cliente -> setTelefono(75493820);
   $cliente -> setVehiculo("TOYOTA");

   echo $cliente -> tipo();
   echo $cliente -> getidentificacion();
   echo "NUMERO: " .$cliente -> getTelefono() ."<br/>";
   echo "VEHICULO: ". $cliente -> getVehiculo();

   // objeto coche

   $coche = new Coche("KNJ-605", "TOYOTA", "Corolla HEV");
   $coche -> setAnchura(123);
   $coche -> setAltura(120);

   echo $coche -> tipo();
   echo $coche -> getidentificacion();
   echo "ANCURA: " .$coche -> getAnchura() ."<br/>";
   echo "ALTURA: " .$coche -> getAltura();


   // objeto motor

   $motor = new Motor("A567-390", "NISSA", "Nissan Kicks e-POWER.");
   $motor -> setLimitador("Verdadero");

   echo  $motor -> tipo();
   echo $motor -> getidentificacion();
   echo "MOTOR: ". $motor -> getLimitador();
   




?>