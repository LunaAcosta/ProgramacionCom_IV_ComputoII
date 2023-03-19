<?php
  // definimos la clase de libro
  class Libro{
      //definimos sus propiedades 
      private $titulo;
      private $autor;
      private $genero;
      private $numPaginas;
      private $editor;
      protected $anoDePublicacion;

      // constructor de la clase
      function __construct($titulo, $autor, $genero, $numPaginas, $editor){
        $this -> titulo = $titulo;
        $this -> autor = $autor;
        $this -> genero = $genero;
        $this -> numPaginas = $numPaginas;
        $this -> editor = $editor;
        $this -> anoDePublicacion = date('Y-m-d');
      }

      public function getRegistro(){
        echo "<h3>DATOS DE LIBROS </h3>";
        echo "Titulo: ". $this -> titulo ."<br/>";
        echo "Autor: " .$this -> autor ."<br/>";
        echo "Genero: " .$this -> genero ."<br/>";
        echo "Numero Paginas: " .$this -> numPaginas ."<br/>";
        echo "Editor: " .$this -> editor ."<br/>";
        echo "Publicacion: " .$this -> anoDePublicacion ."<br/>";

      }
  }

  $libro = new Libro("El principito", "Antoine de Saint", "Novela", 120, "Reynal & Hitchcock");
  echo $libro -> getRegistro();

?>