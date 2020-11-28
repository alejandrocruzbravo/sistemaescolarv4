<?php 

    use Illuminate\Database\Capsule\Manager as DB;
    require '../vendor/autoload.php';
    require 'database.php';
    session_start();

    DB::table('calificaciones')
    ->where('idcalificaciones',$_SESSION['id'])->delete();

        header('location:../home.php');
        exit;

?>