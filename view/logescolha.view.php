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
          <a href="../"><li>SOBRE NÓS</li></a>
        </ul>
      </nav>
    </header>

    <main>
      <div class="col escolha l-6">
        <h2>Entrar como:</h2> <br>
        <a class="col" href="logcliente.view.php">Cliente</a>
        <a class="col" href="logequipe.view.php">Equipe</a>
        <a class="col" href="logadm.view.php">Administrador</a>
      </div>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
