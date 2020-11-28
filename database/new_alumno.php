<?php 

    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';

    DB::table('alumnos')->insert(
        ['idalumno' => $_POST['matricula'],
        'nombrealumno' => $_POST['nombre'],
        'apellidoPat' => $_POST['apellidoPat'],
        'apellidoMat' => $_POST['apellidoMat']]);
        header('location:../home.php');
        exit;
    
?>
