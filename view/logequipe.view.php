<?php
 session_start();
 ?>

 <!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <link rel="stylesheet" href="../CSS/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/remove-colors.css">
  </head>

  <body id="registro">

    <header>
      <nav>
        <h1 class="col l-4">NANOTEC</h1>

        <ul class="col l-8">
          <a href="cadescolha.view.php"><li class="col l-4">REGISTRAR</li></a>
          <a href="#"><li class="col l-4 onthis">LOGIN</li></a>
          <a href="../"><li class="col l-4">SOBRE NÓS</li></a>
        </ul>
      </nav>
    </header>

    <main>
      <form class="cadastro" action="../app/logincliente.app.php" method="post">
        <h1>Login equipe:</h1>
        <input type="text" name="cpf" value="" placeholder="cpf/cnpj (sómente numeros)" required>
        <input type="text" name="senha" value="" placeholder="Senha" required>
        <br>
        <button type="submit" name="button">Entrar</button>
      </form>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
