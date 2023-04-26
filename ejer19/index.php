<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio N°19</title>
</head>

<body>

   <style>
      fieldset {
         max-width: 400px;
      }
   </style>

   <!-- post: Para almacenar datos -->
   <fieldset>
      <form class="row" action="guardar.php" method="POST">
         <div>
            <input type="number" name="codEmple" placeholder="cod" required>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="number" name="sueldo" placeholder="Sueldo Básico" required>
         </div>         
         <hr>
         <div>
            <label for=""> Categoria: </label>
            <input type="radio" name="categoria" value="1" id="M" required>
            <label for="M"> Mecánico </label>
            <input type="radio" name="categoria" value="2" id="C" required>
            <label for="C"> Conductor </label>
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