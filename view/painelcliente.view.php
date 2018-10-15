<?php
 session_start();
 $nome = $_SESSION['nome'];
 $id = $_SESSION['id'];
 $email = $_SESSION['email'];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <link rel="stylesheet" href="../CSS/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/remove-colors.css">
  </head>

  <body>
    <h1>Bem vindo: <?php echo"$nome"; ?> </h1>

    <a href="#"> <button type="button" name="button">Fazer pedido</button></a>
      <a href="#"> <button type="button" name="button">Acompanhamento de pedidos</button></a>
        <a href="altcliente.view.php"> <button type="button" name="button">Configurações de conta</button></a>
          <a href="../app/logout.app.php"> <button type="button" name="button">Log Out</button></a>
  </body>
</html>
