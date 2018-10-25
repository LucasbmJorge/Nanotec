<?php
 session_start();

 include '../includes/head.php';
 ?>

  <body id="green">

    <header>
      <nav>
        <a href="#"><h1 class="col l-4">NANOTEC</h1></a>
        <ul class="col l-8">
        <a href="#"><li class="col l-4 onthis"></i> REGISTRAR</li></a>
        <a href="logescolha.view.php"><li class="col l-4"></i> LOGIN</li></a>
        <a href="../"><li class="col l-4"></i> SOBRE NÓS</li></a>
      </ul>
    </nav>
    </header>

    <main>
      <div class="col escolha l-6">
        <h2>Registrar como:</h2> <br>
        <a href="cadcliente.view.php">Cliente</a>
        <a href="cadequipe.view.php">Equipe</a>
      </div>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
