<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Resultado</title>
</head>
<body>
   
   <?PHP

      $ar = fopen("ejer15.txt", "a") or die ("Problemas con grabar datos");
      
      $guardar = $_REQUEST['nombre'] . "," . $_REQUEST['edad'] . "," . $_REQUEST['sexo'] . "," . $_REQUEST['estCivil'] . "\n";

      fputs($ar, $guardar);

      fclose($ar);

      echo "Datos guardados correctamente...";


   ?>

</body>
</html>