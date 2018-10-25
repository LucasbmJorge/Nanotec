<?php
 session_start();

 include '../includes/head.php';
 ?>

  <body id="registro">

    <header>
      <nav>
        <h1 class="col l-4">NANOTEC</h1>
        <ul class="col l-8">
          <li class="col l-4"><i class="fas fa-address-card"></i> REGISTRAR</li>
          <a href=""><li class="col l-4 onthis"><i class="fas fa-home"></i> LOGIN</li></a>
          <a href=""><li class="col l-4"><i class="fas fa-book"></i> SOBRE NÓS</li></a>
        </ul>
      </nav>
    </header>

    <main>
      <form class="cadastro" action="../app/logincliente.app.php" method="post">
        <h1>NANOTEC</h1>
        <input type="text" name="cpf" value="" placeholder="cpf/cnpj (sómente numeros)" required>
        <input type="text" name="senha" value="" placeholder="Senha" required>
        <br>
        <button type="submit" name="button">Cadastrar-se</button>
      </form>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
