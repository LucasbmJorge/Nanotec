<?php include "../includes/conecta.php";


 $nome = $_POST['nomec'];
 $cpfcnpj = $_POST['cpfcnpj'];
 $tipopessoa = 1;
 $empresa = $_POST['empresac'];
 $endereco = $_POST['enderecoc'];
 $telefone = $_POST['telefonec'];
 $email = $_POST['emailc'];
 $senha = $_POST['senhac'];
 //echo" $codigo <br> $nomefisico <br> $cpf <br> $enderecofisico <br> $telefonefisico <br> $emailfisico <br> $senhafisico";

  $sql = "INSERT INTO `nanotec`.`cliente` (`nome_cliente`, `cpf_cnpj`, `tipopessoa`, `empresa_cliente`, `endereco_cliente`,
     `telefone_cliente`, `email_cliente`, `senha`)
   VALUES ('$nome', '$cpfcnpj', '$tipopessoa', '$empresa', '$endereco', '$telefone', '$email', '$senha');
;";





  $result = $conn->query($sql);
  ?>
