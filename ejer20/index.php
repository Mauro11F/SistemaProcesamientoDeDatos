<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio N° 20</title>
</head>

<body>

   <style>
      fieldset {
         max-width: 400px;
      }
   </style>

   <fieldset>
      <form class="row" action="guardar.php" method="POST">
         <div>
            <input type="number" name="codEmple" placeholder="cod" required>
         </div>
         <div>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" placeholder="Apellido" required>
         </div>
         <hr>
         <div>
            <label for=""> Fecha ingreso: </label>

            <input type="date" name="fechaIngre" required>
         </div>
         <hr>
         <div>
            <label for=""> Fecha de baja: </label>

            <input type="date" name="fechaBaja" required>
         </div>
         <hr>
         <div>
            <label for=""> Sueldo Básico: </label>

            <input type="number" name="sueldoB" required>
         </div>
         <hr>
         <input type="submit" value="Guardar">
      </form>
   </fieldset>
   <fieldset>
      <legend>Informes:</legend>

      <button><a href="informe.php"> Informe </a></button>
   </fieldset>

</body>

</html>