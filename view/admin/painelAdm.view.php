<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];


 if(!$adm){
   session_destroy();
   header("Location: ../");
 } else{
  include '../includes/head.php';
}
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
      <h2>Bem vindo a <span>NANOTEC</span>: <?php echo"$nome"; ?> </h2>
    <a href="admin/registroequipe.view.php" class="col l-6 m-3 ">Registrar empresas</a>
    <a href="#" class="col l-6 m-3 ">Registrar funcionario</a>
    <a href="altadm.view.php" class="col l-6 m-3 ">Configurações da conta</a> <br>
    <a href="altcliente.view.php" class="col l-6 m-3 ">Configurações de equipes</a>
    <a href="altcliente.view.php" class="col l-6 m-3 ">Configurações de clientes</a>
    <a href="../app/logout.app.php" class="col l-6 m-3 ">Sair</a>
    </div>
  </body>
</html>
