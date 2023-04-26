<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejerc | 15</title>
</head>

<body>
   <style>

      fieldset 
      {
         max-width: 400px;
      }

   </style>

   <!-- post: Para almacenar datos -->
   <fieldset>
      <form class="row" action="guardar.php" method="POST">
         <div>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="number" name="edad" placeholder="Edad" required>
         </div>
         <hr>
         <div>
            <input type="radio" name="sexo" value="1" id="M" required>
            <label for="M"> Masculino </label>
            <input type="radio" name="sexo" value="2" id="F" required>
            <label for="M"> Femenino </label>
            <input type="radio" name="sexo" value="3" id="O" required>
            <label for="M"> Otro </label>
         </div>
         <hr>
         <div>
            <input type="radio" name="estCivil" value="1" id="S" required>
            <label for="S"> Soltero </label>
            <input type="radio" name="estCivil" value="2" id="C" required>
            <label for="C"> Casado </label>
         </div>
         <hr>
         <input type="submit" value="Guardar">
      </form>
   </fieldset>
   <fieldset>
      <legend>Informes:</legend>

      <button><a href="">Punto-15</a></button>
      <button><a href="">Punto-16</a></button>
   </fieldset>

</body>

</html>