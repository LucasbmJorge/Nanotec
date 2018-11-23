<?php
 session_start();

 include '../../includes/head.php';

 ?>

  <body id="green">

    <header>
      <?php include "lognav.php"; ?>
    </header>

    <main>
      <form class="cadastro" action="../../app/logincliente.app.php" method="post">
        <h1>Login cliente:</h1>
        <input type="text" name="cpf" value="" placeholder="cpf/cnpj (sómente numeros)" autocomplete="off" required>
        <input type="text" name="senha" value="" placeholder="Senha" autocomplete="off" required>
        <br>
        <button type="submit" name="button">Entrar</button>
      </form>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
