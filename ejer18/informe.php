<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Informe 18</title>
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
            <th>Nombre Apellido</th>
            <th>Categoría</th>
            <th>Sueldo Básico</th>
            <th>Sexo</th>
            <th>Estado Civil</th>
         </tr>
      </thead>
      <tbody>
         <?PHP

         $totalSBasico = 0;
         $totalEmpleados = 0;
         $contAdminis = 0;
         $contMecanicos = 0;
         $contCasados = 0;

         $archivo = fopen("ejer18.txt", "r") or die("Problemas para leer el archivo");

         while (!feof($archivo)) {

            $linea = fgets($archivo);
            $datos = explode(",", $linea);

            if (count($datos) > 1) {

               $totalEmpleados += 1;
         ?>

               <tr>
                  <td> <?PHP echo $datos[1] . " " . $datos[2]; ?> </td>
                  <td>
                     <?PHP
                     if ($datos[3] === "1") {
                        echo "Mecanico";
                        $contMecanicos += 1;
                     } else {
                        echo "Administrativo";
                        $contAdminis += 1;
                     }

                     ?>
                  </td>
                  <td> <?PHP echo "$" . $datos[4]; ?> </td>
                  <td>
                     <?PHP
                     if ($datos[5] === "1") {
                        echo "Masculino";
                     } else {
                        echo "Femenino";
                     }

                     ?>
                  </td>
                  <td>
                     <?PHP
                     if (trim($datos[6]) === "1") {
                        echo "Soltero";
                     } else {
                        echo "Casado";
                        $contCasados += 1;

                     }
                     ?>
                  </td>
               </tr>

         <?PHP

               $totalSBasico += intval($datos[4]);
            }
         }

         fclose($archivo);

         ?>
      </tbody>
      <tfoot>
         <tr>
            <td colspan="2"> Total </td>
            <td> <?PHP echo "$" . $totalSBasico ?> </td>
            <td></td>
         </tr>
      </tfoot>
   </table>


   <p>Total Empleados = <?PHP echo $totalEmpleados; ?></p>
   <p>Total Mecánicos = <?PHP echo $contMecanicos; ?></p>
   <p>Total Administrativos = <?PHP echo $contAdminis; ?></p>
   <p>Total Casados = <?PHP echo $contCasados; ?></p>
   <p>Total de Sueldo a Pagar = <?PHP echo "$" . $totalSBasico; ?></p>

   <button>
      <a href="index.php"> <-- Volver </a>
   </button>

</body>

</html>