<?php 

    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';
    session_start();
    

    DB::table('calificaciones')->insert(
        ['calificacionEsp' => $_POST['cal_español'], 
        'calificacionMat' => $_POST['cal_matematicas'],
        'calificacionHist' => $_POST['cal_historia'],
        'idalumnos'=>$_SESSION['id'],
        'idcalificaciones'=>$_SESSION['id']]);

        header('location:../home.php');
        exit;

        


?>