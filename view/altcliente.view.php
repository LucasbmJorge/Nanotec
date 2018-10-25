<?php

 include "../conecta.php";

 session_start();
 $id = $_SESSION['id'];
 
 include '../includes/head.php';
 ?>

  <body>
    <main>
    <?php

      $sql = "SELECT * FROM `cliente` WHERE id_cliente = $id;";

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
        <form class='cadastro' action='../app/altcliente.app.php' method='POST'>
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
   </main>
  </body>
</html>
