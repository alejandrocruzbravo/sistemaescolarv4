<?php
  use Illuminate\Database\Capsule\Manager as DB;
  require 'vendor/autoload.php';
  require 'database/database.php';

  session_start();

  $alumnos = DB::table('alumnos')
            ->leftJoin('calificaciones', 'calificaciones.idalumnos', '=', 'alumnos.idalumno')
            ->get();
    
?>

<!-- --------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de calificaciones - Inicio</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-mobile/js/jquery.mobile.js"></script>
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
</head>
<body>
    <?php require 'partials/header.html'; ?>
    <br>
    <br>

    <h3 align="center" class="subtitle is-3">CALIFICACIONES REGISTRADAS</h3>
    <br>

    <div class="buttons">
    <?php if($_SESSION['perfil'] == "profesor"){ ?>
        <a href="frm_alumno.php" class="button is-info"><img src="img/add-file.svg" width="30px" height="30px">Agregar alumno</a>
    <?php } ?>
      </div>
      <div class="table-container">
          <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
              <thead>
                  <tr>
                    <th>Num. Lista</th>
                    <th>Nombre</th>
                    <th>Español</th>
                    <th> Matematicas</th>
                    <th>Historia</th>
                    <th>Promedio</th>
                    <?php if($_SESSION['perfil'] == "profesor"){ ?>
                      <th>Acción</th>
                    <?php } ?>
                  </tr>
                </thead>
              <tbody>
                <?php foreach($alumnos as $alumno){ ?>
                  <tr>
                  <td><?php echo $alumno->idalumno; ?> </td>
                      <th><?php echo $alumno->nombrealumno; ?> <?php echo $alumno->apellidoPat; ?> <?php echo $alumno->apellidoMat; ?></th>
                      <th><?php echo $alumno->calificacionEsp; ?></th>
                      <th><?php echo $alumno->calificacionMat; ?></th>
                      <th><?php echo $alumno->calificacionHist; ?></th>
                      <th> <?php echo (($alumno->calificacionEsp + $alumno->calificacionMat + $alumno->calificacionHist)/3); ?></th>
                      <th>
                      <?php if($_SESSION['perfil'] == "profesor"){ ?>
                          <a href="frm_mod_calif.php?id=<?php echo $alumno->idalumno; ?>" class="button is-warning"><img src="img/lapiz.svg" width="15px" height="10px">Modificar</a>
                          <a href="frm_calificacion.php?id=<?php echo $alumno->idalumno; ?>" class="button is-success" ><img src="img/anadir-evento.svg" width="15px" height="10px">Calificación</a>
                          <a href="frm_delete_calif.php?id=<?php echo $alumno->idalumno; ?>" class="button is-danger" ><img src="img/borrar.svg" width="15px" height="10px">Eliminar</a>
                      <?php } ?>
                      </th>
                  </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
    </div>
  <?php require 'partials/footer.html'; ?>
</body>
</html>