<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];


 if(!$adm){
   session_destroy();
   header("Location: ../");
 } else{
   include "../../includes/head.php";
}
 ?>


  <body id="painel">

    <header>
      <nav>
      <a href="#" class="col nanotec">NANOTEC</a>
        <ul>
          <a class="onthis"><li>PAINEL</li></a>
          <a href="../../"><li>SOBRE NÓS</li></a>
        </ul>
      </nav>
    </header>

    <div class="col controle">
      <h2>Bem vindo a <span>NANOTEC</span>: <?php echo"$nome"; ?> </h2>
    <a href="registroequipe.view.php" class="col">Registrar equipe</a>
    <a href="altadm.view.php" class="col">Configurações da conta</a> <br>
    <a href="equipeescolha.view.php" class="col">Configurações de equipes</a>
    <a href="clienteescolha.view.php" class="col">Configurações de clientes</a> <br>
    <a href="../../app/logout.app.php" class="col">Sair</a>
    </div>
  </body>
</html>
