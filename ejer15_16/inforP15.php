<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Informe N° 15</title>
</head>

<body>

   <style>
      table,
      th,
      td {
         border: 1px solid #000;
         border-collapse: collapse;
         min-width: 100px;
         text-align: center;
      }
      fieldset {
         margin-top: 20px;
      }

   </style>

   <table>
      <tr>
         <th> Nombre </th>
         <th> Edad </th>
         <th> Sexo </th>
         <th> Estado Civil </th>
      </tr>

         <?PHP

         $cantAlumnos = 0;
         $totalVarones = 0;
         $totalMujeresSolt = 0;

         $archivo = fopen("ejer15.txt", "r") or die("Problemas con la lectura del archivo");

         # feof() Comprueba si se ha llegado al final del archivo. devuelve "true" si llega al final y "false" si no se llego aun.
         while (!feof($archivo)) {

            $linea = fgets($archivo);

            // echo $linea . "<br>"; # Mostrando todo el Archivo...

            $datos = explode(",", $linea); # explode separa la cadena por *comas* y las guarda en una *array nuevo*.

            if (count($datos) > 1) {

               echo "<tr>";
               // echo "<td>". $datos[0] . "</td>";
               echo "<td> {$datos[0]} </td>"; // Otra forma de concatenar, donde dentro de "{}" va la variable a mostrar
               echo "<td>". $datos[1] . "</td>";               

               $cantAlumnos += 1; #Contador de alumnos

               if ($datos[2] === "1") {

                  echo "<td> Masculino </td>";
                  $totalVarones += 1; #Contador de Varones

               } else {
                  # trim() nos permite borrar los espacios vacios y caracteres especiales de una cadena, tanto por delante como por atras...
                  # En este caso se uso para eliminar el caracter especial "\n" salto de linea que trae el archivo.
                  echo "<td> Femenino </td>";
                  if (trim($datos[3]) === "1") {

                     $totalMujeresSolt += 1; #Contador de Mujeres

                  }
               }

               if (trim($datos[3]) === "1") {
                  echo "<td> Soltero </td>";
               }else {
                  echo "<td> Casado </td>";
               }

               echo "</tr>";
            }
         }

         fclose($archivo);
         ?>
   </table>


   <fieldset>
      <legend> Totales: </legend>

      <p>Cantidad de Alumnos = <?PHP echo $cantAlumnos ?> </p>
      <p>Total de Varones = <?PHP echo $totalVarones ?> </p>
      <p>Total de Mujeres Solteras = <?PHP echo $totalMujeresSolt ?> </p>
   </fieldset>

</body>

</html>