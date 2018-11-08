<?php
  include "../includes/conecta.php";

  session_start();

  if (isset($_SESSION['id'])) {
    if(isset($_SESSION['administrador'])){
      header("Location: paineladm.view.php");
    }
    else{
      if ($_SESSION['tipologin'] == 'cliente') {
       header("Location: painelcliente.view.php");
      }
      if ($_SESSION['tipologin'] == 'equipe') {
        header("Location: painelequipe.view.php");
      }
    }
  }
 ?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <link rel="stylesheet" href="../CSS/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/remove-colors.css">
  </head>
