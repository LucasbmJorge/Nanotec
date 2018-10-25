<?php
 session_start();

 include '../includes/head.php';
 ?>

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
      <form class="cadastro" action="../app/loginequipe.app.php" method="post">
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
