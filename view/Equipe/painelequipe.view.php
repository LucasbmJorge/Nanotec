<?php
 session_start();
 $nome = $_SESSION['nome'];
 include "../../includes/head.php";
 ?>

  <body id="painel">

    <header>
      <nav>
      <a href="#" class="col nanotec">NANOTEC</a>
        <ul>
          <a class="onthis"><li>PAINEL</li></a>
          <a href="../"><li>SOBRE NÓS</li></a>
        </ul>
      </nav>
    </header>

    <div class="col controle">
      <?php echo"
      <h2>Bem vindo $nome</h2>
      "; ?>

    <a href="pedidosabertos.view.php">Lista de pedidos</a>
    <a href="pedidosaceitos.view.php">Pedidos em andamento</a>
    <a href="altequipe.view.php">Configurações da conta</a>
    <a href="../../app/logout.app.php">Log Out</a>

    </div>
  </body>
</html>
