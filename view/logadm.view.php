<?php
 session_start();

 include '../includes/head.php';

 ?>

  <body id="green">

    <header>
      <nav>
      <a href="#" class="col nanotec">NANOTEC</a>
        <ul>
          <a href='cadescolha.view.php'><li>REGISTRAR</li></a>
          <a class="onthis"><li>LOGIN</li></a>
          <a href=""><li>SOBRE NÓS</li></a>
        </ul>
      </nav>
    </header>

    <main>
      <form class="cadastro" action="../app/loginadm.app.php" method="post">
        <h1>Login Admin:</h1>
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="text" name="senha" placeholder="Senha" required>
        <br>
        <button type="submit" name="button">Entrar</button>
      </form>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
