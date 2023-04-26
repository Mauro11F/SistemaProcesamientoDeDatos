<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>

   <?PHP

   $cantMuj20_30 = 0;
   $cantMujCas30_40 = 0;
   $cantMujCasadas = 0;
   $totalVarones = 0;
   $totalVaronSolt25anios = 0;
   $totalVaronCas = 0;

   $archivo = fopen("ejer15.txt", "r") or die("Problemas con la lectura del archivo");

   # feof() Comprueba si se ha llegado al final del archivo. devuelve "true" si llega al final y "false" si no se llego aun.
   while (!feof($archivo)) {

      $linea = fgets($archivo);

      echo $linea . "<br>"; # Mostrando todo el Archivo...

      $datos = explode(",", $linea); # explode separa la cadena por *comas* y las guarda en una *array nuevo*.

      if (count($datos) > 1) {

         if ($datos[2] === "1") { # 1 == varon   2 == mujer

            $totalVarones += 1; #Contador de Varones
            if (trim($datos[3]) === "1") { # 1 == soltero   2 == casado
               
               if ($datos[1] === "25") {
                  
                  $totalVaronSolt25anios += 1; # Contador Varones Solteros de 25 años

               }

            } else {
               
               $totalVaronCas += 1; # Total varones Casados

            }
            

         } else {

            if ($datos[1] >= "20" and $datos[1] <= "30") {
               
               $cantMuj20_30 += 1;

            }

            # trim() nos permite borrar los espacios vacios y caracteres especiales de una cadena, tanto por delante como por atras...
            # En este caso se uso para eliminar el caracter especial "\n" salto de linea que trae el archivo.

            if (trim($datos[3]) === "2") { # 1 == soltero   2 == casado

               $cantMujCasadas += 1;
               if ($datos[1] >= "30" and $datos[1] <= "40" ) {
                  
                  $cantMujCas30_40 += 1;

               }

            }
         }
      }
   }

   fclose($archivo);
   ?>

<fieldset>
      <legend> Totales: </legend>

      <p>Cantidad de Mujeres entre 20 y 30 años = <?PHP echo $cantMuj20_30 ?> </p>
      <p>Cantidad de Mujeres Casadas entre 30 y 40 años = <?PHP echo $cantMujCas30_40 ?> </p>
      <p>Cantidad de Mujeres Casadas = <?PHP echo $cantMujCasadas ?> </p>
      <p>Total de Varones = <?PHP echo $totalVarones ?> </p>
      <p>Total de Varones Solteros de 25 años = <?PHP echo $totalVaronSolt25anios ?> </p>
      <p>Total de Varones Casados = <?PHP echo $totalVaronCas ?> </p>
   </fieldset>


</body>

</html>