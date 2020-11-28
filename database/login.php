<?php 
  use Illuminate\Database\Capsule\Manager as DB;
  require '../vendor/autoload.php';
  require 'database.php';
  session_start();

  $user = DB::table('usuarios')->where('nombreusuario', $_POST['usuario'])->first(); 
  $mensaje = "";
  if($user->password == $_POST['password']){
    $_SESSION['perfil'] = $user->nombreusuario;
    
     header('location:../home.php');
      exit;

  } else {
      header('location:../index.php');
      exit;
  }
?>