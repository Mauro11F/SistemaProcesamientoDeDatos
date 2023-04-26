<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Informe 19</title>
</head>

<body>

   <style>
      table {
         min-height: 150px;
      }

      table,
      caption,
      th,
      td {
         border: 1px solid #000;
         border-collapse: collapse;
         min-width: 150px;
         text-align: center;
      }
   </style>


   <table>
      <caption> Padron Empleados </caption>
      <thead>
         <tr>
            <th>Cod. Empleados</th>
            <th>Nombre Apellido</th>
            <th>Sueldo Básico</th>
            <th>Observaciones</th>
         </tr>
      </thead>
      <tbody>
         <?PHP

         $totalSueldos = 0;
         $contSueldos = 0;
         $totalMecanicos = 0;
         $acumSueldoMeca =0;

         $archivo = fopen("ejer19.txt", "r") or die("Problemas para leer el archivo");

         while (!feof($archivo)) {

            $linea = fgets($archivo);
            $datos = explode(",", $linea);

            if (count($datos) > 1) {

               $contSueldos += 1;
               ?>

               <tr>
                  <td> <?PHP echo $datos[0]; ?> </td>
                  <td> <?PHP echo $datos[1]; ?> </td>
                  <td> <?PHP echo "$".$datos[2]; ?> </td>
                  <td>
                     <?PHP 
                        if (trim($datos[3]) === "1") {
                           echo "Mecánico";
                           $totalMecanicos += 1;
                           $acumSueldoMeca += intval($datos[2]);
                        } else {
                           echo "Conductor";
                        }
                     ?>
                  </td>
               </tr>

         <?PHP

               $totalSueldos += intval($datos[2]);

            }
         }

         fclose($archivo);

         ?>
      </tbody>
      <tfoot>
         <tr>
            <td colspan="2"> Total </td>
            <td> <?PHP echo "$".$totalSueldos ?> </td>
            <td></td>
         </tr>
      </tfoot>

   </table>

   <p>Promedio Sueldos = <?PHP echo "$". ($totalSueldos/$contSueldos) ?> </p>
   <p>Promedio sueldo de Mecánicos = <?PHP echo "$". ($acumSueldoMeca / $totalMecanicos) ?> </p>

   <button>
      <a href="index.php"> <-- Volver </a>
   </button>

</body>

</html>