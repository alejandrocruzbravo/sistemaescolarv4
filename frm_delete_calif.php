<?php   
        use Illuminate\Database\Capsule\Manager as DB;
        require 'vendor/autoload.php';
        require 'database/database.php';

        session_start();

        $int_value = intval($_GET['id']);
        $_SESSION['id'] = $int_value;

        $alumnos = DB::table('alumnos')
        ->leftJoin('calificaciones', 'calificaciones.idalumnos', '=','alumnos.idalumno')
        ->where('idalumno', '=', $int_value)
        ->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <title>Registro de calificaciones - Modificar calificación</title>
</head>
<body>
    <?php require 'partials/header.html'; ?>
    <br>
    <br>
    <br>
    <h2 align="center" class="subtitle is-2"><img src="img/borrar.svg" width="40px" height="55px">ELIMINAR REGISTRO</h2>


    <div class="columns is-multiline is-mobile">
        <div class="column is-one-quarter">
        <article class="message is-danger">
            <div class="message-header">
                <p>Eliminar registro</p>
            </div>
            <div class="message-body">
                Usted esta apunto de eliminar un registro de la tabla de calificaciones escolares. Todos los datos que usted elimine 
                serán guardados y no podrá volver a recuperarlos una vez eliminados. Se eliminara todo el registro completo.
            </div>
        </article>
        </div>


        <div class="column">
            <form action="database/delete.php" method="GET">
            <?php foreach($alumnos as $alumno){ ?>
                <div class="field">
                    <label class="label">Nombre del alumno</label>
                    <div class="control">
                        <input class="input is-rounded" type="text" placeholder="<?php echo $alumno->nombrealumno;?> <?php echo $alumno->apellidoPat;?> <?php echo $alumno->apellidoMat;?>" disabled>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Calificación de español</label>
                    <div class="control">
                        <input class="input is-rounded is-small" placeholder="<?php echo $alumno->calificacionEsp;?>" type="text" disabled>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Calificación de matematicas</label>
                    <div class="control">
                        <input class="input is-rounded is-small" placeholder="<?php echo $alumno->calificacionMat;?>" type="text" disabled>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Calificación de historia</label>
                    <div class="control">
                        <input class="input is-rounded is-small" placeholder="<?php echo $alumno->calificacionHist;?>" type="text" disabled>
                    </div>
                </div>
                <br>
                <div class="buttons">
                <input type="submit" class="button is-danger" value="ELIMINAR">
                    <a href="home.php" class="button is-light">VOLVER</a>
                </div>
            <?php } ?>
            </form>           
        </div>

        
    </div>

    <?php require 'partials/footer.html'; ?>
</body>
</html>