<?php
 session_start();

 include '../includes/head.php';
 ?>

  <body id="green">

    <header>
      <nav>
      <a href="#" class="col nanotec">NANOTEC</a>
        <ul>
          <a class="onthis"><li>REGISTRAR</li></a>
          <a href='logescolha.view.php'><li>LOGIN</li></a>
          <a href=""><li>SOBRE NÓS</li></a>
        </ul>
      </nav>
    </header>

    <main>
      <form class="cadastro" action="../app/cadastrocliente.app.php" method="post">
        <h1>Cadastro de cliente:</h1>
        <input type="text" name="nomec" value="" placeholder="Nome" required>
        <input type="text" name="cpfcnpj" value="" placeholder="cpf/cnpj (sómente numeros)" required>
        <input type="text" name="empresac" value="" placeholder="Empresa" required>
        <input type="text" name="enderecoc" value="" placeholder="Endereço" required>
        <input type="text" name="telefonec" value="" placeholder="Telefone" required>
        <input type="text" name="emailc" value="" placeholder="E-mail" required>
        <input type="text" name="senhac" value="" placeholder="Senha" required>
        <br>
        <button type="submit" name="button">Cadastrar-se</button>
      </form>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
