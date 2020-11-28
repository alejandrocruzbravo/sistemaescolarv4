
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
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-mobile/js/jquery.mobile.js"></script>
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <title>Registro de calificaciones - Agregar calificación</title>
</head>
<body>
    <?php require 'partials/header.html'; ?>
    <br>
    <br>
    <br>
    <h2 align="center" class="subtitle is-2"><img src="img/anadir-evento.svg" width="40px" height="55px">AGREGAR CALIFICACIÓN</h2>
    <div class="columns is-multiline is-mobile">
        <div class="column is-one-quarter">
        <article class="message is-success">
            <div class="message-header">
                <p>Modificar calificación</p>
            </div>
            <div class="message-body">
                Usted esta apunto de agregar un registro a la tabla de calificaciones escolares. Todos los datos que usted agregue 
                serán guardados y podrá volver a modificarlos cuando usted desee. La identificación del alumno no podrá ser 
                modificada al igual que su nombre.
            </div>
        </article>
        </div>
        <div class="column">
            <form action="database/new_calf.php" method="POST">

            <?php foreach($alumnos as $alumno){?>
                <div class="field">
                    <label class="label">Nombre del alumno</label>
                    <div class="control">
                        <input class="input is-rounded" type="text" placeholder="<?php echo $alumno->nombrealumno;?> <?php echo $alumno->apellidoPat;?> <?php echo $alumno->apellidoMat;?>" disabled>
                    </div>
                </div>
            <?php } ?>
                <div class="field">
                    <label class="label">Calificación de español</label>
                    <div class="control">
                        <input name="cal_español" class="input is-rounded is-small is-success" type="text">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Calificación de matematicas</label>
                    <div class="control">
                        <input name="cal_matematicas" class="input is-rounded is-small is-success" type="text">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Calificación de historia</label>
                    <div class="control">
                        <input name="cal_historia" class="input is-rounded is-small is-success" type="text">
                    </div>
                </div>
                <br>
                <div class="buttons">
                    <input type="submit" class="button is-success" value="AÑADIR">
                    <a href="home.php" class="button is-light">VOLVER</a>
                </div>
            
            </form>           
        </div>

        
    </div>

    <?php require 'partials/footer.html'; ?>
</body>
</html>