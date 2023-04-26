<?PHP

   if (!empty($_REQUEST['nombre'])) {
      
      $archivo = fopen("ejer18.txt", "a") or die ("Problemas con la creacion del archivo");

      $cadena = $_REQUEST['codEmple'].",".$_REQUEST['nombre'].",".$_REQUEST['apellido'].",".$_REQUEST['categoria'].",".$_REQUEST['sueldoB'].",".$_REQUEST['sexo'].",".$_REQUEST['estCivil']."\n";

      fputs($archivo, $cadena);

      fclose($archivo);

      echo "Datos guardados correctamente... <br>";
      echo "<a href='index.php'> Volver </a>";

   } else {

      echo "Nombre Vacio...";

   }

?>