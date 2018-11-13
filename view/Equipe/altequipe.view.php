<?php

 include "../../includes/conecta.php";

 session_start();

   if (!isset($_SESSION['id']) || $_SESSION['tipologin'] != 'equipe'){
     header("Location:../../");
   }

   $id_equipe = $_SESSION['id'];


 include "../../includes/head.php";
 ?>

  <body id="painel">
    <header>
    <?php  include "equinav.php"; ?>
    </header>
    <main>
      <div class="controle">
    <?php

      $sql = "SELECT * FROM `equipe` WHERE id_equipe = $id_equipe";
      $result = $conn -> query($sql);


      while( $row = $result->fetch_assoc()){
        $nome = $row['nome_da_equipe'];
        $cnpj = $row['cnpj_equipe'];
        $integrantes = $row['numero_integrantes'];
        $endereco = $row['endereco_equipe'];
        $telefone = $row['telefone_equipe'];
        $email = $row['email_equipe'];
        $senha = $row['senha_equipe'];

        echo"
        <form action='../../app/altequipe.app.php' method='POST'>
        <input type='hidden' name='equipe' value='$id_equipe'/>
        <input type='text' name='nome' value='$nome'/>
        <input type='text' name='cnpj' value='$cnpj'/>
        <input type='text' name='integrantes' value='$integrantes'/>
        <input type='text' name='endereco' value='$endereco'/>
        <input type='text' name='telefone' value='$telefone'/>
        <input type='text' name='email' value='$email'/>
        <input type='text' name='senha' value='$senha'/>
        <button type='submit'>Alterar</button>
        </form>
        ";

      }
     ?>
           </div>
   </main>
  </body>
</html>
