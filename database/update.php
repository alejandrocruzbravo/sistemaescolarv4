<?php 

    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';

    session_start();

    DB::table('calificaciones')
    ->where('idcalificaciones', $_POST['NumList'])
    ->update(['calificacionEsp' => $_POST['Cal_Esp'], 'calificacionMat' => $_POST['Cal_mat'], 'calificacionHist' => $_POST['Cal_hist']]);

    header('location:../home.php');
    exit;
    
    
?>