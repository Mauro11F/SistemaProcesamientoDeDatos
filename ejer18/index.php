<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejercicio 18</title>
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
         </div>
         <div>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" placeholder="Apellido" required>
         </div>
         <hr>
         <div>
            <label for=""> Categoria: </label>

            <input type="radio" name="categoria" value="1" id="C" required>
            <label for="C"> Mecánico </label>
            <input type="radio" name="categoria" value="2" id="C" required>
            <label for="C"> Administrativo </label>
         </div>
         <hr>
         <div>
            <label for=""> Sexo: </label>

            <input type="radio" name="sexo" value="1" id="S" required>
            <label for="S"> Masculino </label>
            <input type="radio" name="sexo" value="2" id="S" required>
            <label for="S"> Femenino </label>
         </div>
         <hr>
         <div>
            <label for=""> Estado Civil: </label>

            <input type="radio" name="estCivil" value="1" id="E" required>
            <label for="E"> Soltero </label>
            <input type="radio" name="estCivil" value="2" id="E" required>
            <label for="E"> Casado </label>
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