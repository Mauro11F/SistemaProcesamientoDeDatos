<?PHP

   if (!empty($_REQUEST['nombre'])) {
      
      $archivo = fopen("ejer19.txt", "a") or die ("Problemas al crear el archivo");

      $cadena = $_REQUEST['codEmple'].",".$_REQUEST['nombre'].",".$_REQUEST['sueldo'].",".$_REQUEST['categoria']."\n";

      fputs($archivo, $cadena);

      fclose($archivo);

      echo "Datos guardados correctamente...";
      echo "<a href='index.php'> Volver </a>";
      
   } else {

      echo "Nombre Vacio...";

   }



?>