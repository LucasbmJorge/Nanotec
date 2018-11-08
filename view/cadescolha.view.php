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
          <a href="../"><li>SOBRE NÓS</li></a>
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
