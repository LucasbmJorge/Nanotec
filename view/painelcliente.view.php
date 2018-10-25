<?php
 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 }
 $nome = $_SESSION['nome'];
 $id = $_SESSION['id'];
 $email = $_SESSION['email'];

 include '../includes/head.php';
 ?>

  <body id="painel">

    <div class="col controle">

      <h2>Bem vindo a <span>NANOTEC</span>: <?php echo"$nome"; ?> </h2>

    <a class="col" href="#">Fazer pedido</a>
    <a class="col" href="#">Acompanhamento de pedidos</a>
    <a class="col" href="altcliente.view.php">Configurações de conta</a>
    <a class="col" href="../app/logout.app.php">Log Out</a>
    </div>
  </body>
</html>
