<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio N°7</title>
</head>
<body>

   <?PHP

      $contador = 0;
      $i = 2;

      while ($contador <= 60) {
         
         $contador += $i;

         echo "contador = ". $contador . " + " . $i . "<br>";

         $i += 2;

      }

      $resultado = $contador / 2;
      echo "<br><br>" . $contador . "/2 = ". $resultado;

   ?>

</body>
</html>