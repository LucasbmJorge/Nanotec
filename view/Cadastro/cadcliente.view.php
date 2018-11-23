<?php
 session_start();

 include '../../includes/head.php';
 ?>

  <body id="blue">

    <header>
      <?php include "cadnav.php"; ?>
    </header>

    <main>
      <form class="cadastro" action="../../app/cadastrocliente.app.php" method="post">
        <h1>Cadastro de cliente:</h1>
        <input type="text" name="nomec"  autocomplete="off" placeholder="Nome" required>
        <input type="text" class="cpf" name="cpfcnpj"  autocomplete="off" placeholder="CPF" required>
        <input type="text" name="empresac"  autocomplete="off" placeholder="Empresa(Opcional)">
        <input type="text" name="enderecoc"  autocomplete="off" placeholder="Endereço" required>
        <input type="text" class="tel" name="telefonec" autocomplete="off" placeholder="Telefone" required>
        <input type="email" name="emailc"  autocomplete="off" placeholder="E-mail" required>
        <input type="text" name="senhac"  autocomplete="off" placeholder="Senha" required>
        <br>
        <button type="submit" name="button">Cadastrar-se</button>
      </form>
    </main>

<script type="text/javascript" src="../../JS/main.js"></script>
  </body>

  </html>
