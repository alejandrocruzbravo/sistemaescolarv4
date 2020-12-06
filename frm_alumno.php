<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <title>Registro de calificaciones - Nuevo alumno</title>
</head>
<body> 
    <?php require 'partials/header.html'; ?>

    <div class="columns is-mobile">
        <div class="column is-three-fifths is-offset-one-fifth">
        <br>
        <br>
        <br>
          <h2 align="center" class="subtitle is-2">NUEVO ALUMNO</h2>

          <form action="database/new_alumno.php" method="post">
          <div class="field">
              <label class="label">Numero de lista</label>
              <div class="control">
                <input class="input is-rounded is-primary" name="matricula" type="text" placeholder="Ingrese la matricula">
              </div>
            </div>
            <div class="field">
              <label class="label">Nombre del alumno</label>
              <div class="control">
                <input class="input is-rounded is-primary" name="nombre" type="text" placeholder="Ingrese el nombre del alumno">
              </div>
            </div>
            <div class="field">
                <label class="label">Apellido paterno del alumno</label>
                <div class="control">
                  <input class="input is-rounded is-primary"  name="apellidoPat" type="text" placeholder="Ingrese el apellido patero del alumno">
                </div>
            </div>
            <div class="field">
                <label class="label">Apellido materno del alumno</label>
                <div class="control">
                  <input class="input is-rounded is-primary"  name="apellidoMat" type="text" placeholder="Ingrese el apellido patero del alumno">
                </div>
            </div>
            <br>
            <div class="buttons">
                <input type="submit" class="button is-primary" value="AÑADIR">
                <a href="home.php" class="button is-light">VOLVER</a>
              </div>
          </form>


        </div>
      </div>

    <?php require 'partials/footer.html'; ?>
</body>
</html>