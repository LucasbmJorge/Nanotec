<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];
 $id = $_SESSION['id'];

 if(!$adm){
   session_destroy();
   header("Location: ../");
 } else{
   include "../../includes/head.php";
}
 ?>


  <body id="painel">
      <form class="controle" action="../../app/altadm.app.php" method="post">
        <?php
        $sql= "SELECT * FROM `nanotec`. `funcionario` WHERE id_adm = '$id'";
        $result = $conn -> query($sql);
        if ($row = $result->fetch_assoc()) {
          $nome = $row['nome_adm'];
          $email = $row['email_adm'];
          $usuario = $row['usuario_adm'];
          $senha = $row['senha_adm'];
        }

        echo "
        <form action='../../app/altcliente.app.php' method='POST'>
        <input type='text' name='nome' value='$nome'/>
        <input type='text' name='email' value='$email'/>
        <input type='text' name='usuario' value='$usuario'/>
        <input type='text' name='senha' value='$senha'/>
        <button type='submit'>Alterar</button>"
         ?>
      </form>

    </div>

    </body>
