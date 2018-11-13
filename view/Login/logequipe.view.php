<?php
 session_start();

 include '../../includes/head.php';
 ?>

  <body id="green">

    <header>
      <?php include "lognav.php"; ?>
    </header>

    <main>
      <form class="cadastro" action="../../app/loginequipe.app.php" method="post">
        <h1>Login equipe:</h1>
        <input type="text" name="login" value="" placeholder="Nome ou CNPJ (somente numeros)" required>
        <input type="text" name="senha" value="" placeholder="Senha" required>
        <br>
        <button type="submit" name="button">Entrar</button>
      </form>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
