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
          <li class="col l-4 onthis">REGISTRAR</li>
          <a href="logescolha.view.php"><li class="col l-4">LOGIN</li></a>
          <a href="../"><li class="col l-4">SOBRE NÓS</li></a>
        </ul>
      </nav>
    </header>

    <main>
      <form class="equipe" action="../app/listarequipe.app.php" method="post">
        <h1>Cadastro de equipe:</h1>
      <div class="col l-9 pink">
        <input type="text" name="nomee" value="" placeholder="Nome da equipe" required>
        <input type="text" name="cnpje" value="" placeholder="cnpj (sómente numeros)" required>
        <input type="text" name="integrantese" value="" placeholder="Numero de integrantes" required>
        <input type="text" name="enderecoe" value="" placeholder="Endereço" required>
        <input type="text" name="telefonee" value="" placeholder="Telefone" required>
        <input type="text" name="emaile" value="" placeholder="E-mail" required>
        <input type="text" name="senhae" value="" placeholder="Senha" required>
      </div>
    <div class="col l-6 lblue">
      <label for=""> <h3> Especialização: </h3> </label>
    </div>
        <br>
        <button type="submit" name="button">Cadastrar-se</button>
      </form>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
