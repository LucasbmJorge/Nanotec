<?php

 include "../../includes/conecta.php";

 session_start();

   if (!$_SESSION['administrador']){
     header("Location:../../");
   }
   $id_cliente = $_POST['cliente'];


 include "../../includes/head.php";
 ?>

  <body id="painel">
    <header>
    <?php  include "admnav.php"; ?>
    </header>
    <main>
      <div class="controle">
    <?php

      $sql = "SELECT * FROM `cliente` WHERE id_cliente = $id_cliente;";

      $result = $conn -> query($sql);


      while( $row = $result->fetch_assoc()){
        $nome = $row['nome_cliente'];
        $cpf = $row['cpf_cnpj'];

        if ($row['tipopessoa'] == '1') {
          $tipopessoa = 'pessoa fisica';
        }
        else{
          $tipopessoa = 'pessoa juridica';
        }
        $empresa = $row['empresa_cliente'];
        $endereco = $row['endereco_cliente'];
        $telefone = $row['telefone_cliente'];
        $email = $row['email_cliente'];
        $senha = $row['senha'];

        echo"
        <form action='../../app/altcliente.app.php' method='POST'>
        <input type='hidden' name='cliente' value='$id_cliente'/>
        <input type='text' name='nome' value='$nome'/>
        <input type='text' name='cpf' value='$cpf'/>
        <input type='text' name='tipopessoa' value='$tipopessoa'/>
        <input type='text' name='empresa' value='$empresa'/>
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
