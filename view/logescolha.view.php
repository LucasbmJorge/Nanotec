<?php
 session_start();

 include '../includes/head.php';
 ?>

  <body id="green">

    <header>
      <nav>
        <a href="#"><h1 class="col l-4">NANOTEC</h1></a>
        <ul class="col l-8">
        <a href="cadescolha.view.php"><li class="col l-4"></i> REGISTRAR</li></a>
        <a href="#"><li class="col l-4 onthis"></i> LOGIN</li></a>
        <a href="../"><li class="col l-4"></i> SOBRE NÓS</li></a>
      </ul>
    </nav>
    </header>

    <main>
      <div class="col escolha l-6">
        <h2>Entrar como:</h2> <br>
        <a class="col" href="logcliente.view.php">Cliente</a>
        <a class="col" href="logequipe.view.php">Equipe</a> <br> <br>
        <a class="col" href="logadm.view.php">Administrador</a>
      </div>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
