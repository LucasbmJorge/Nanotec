<?php
 session_start();
 include "../conecta.php";

  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM `cliente` WHERE cpf_cnpj='$cpf' && senha='$senha'";

  $result=mysqli_query($conn, $sql);

  if($row = $result->fetch_assoc()){
  $nome = $row['nome_cliente'];
  echo " <br> Logado como: $nome";
  header("Location:../view/painelcliente.view.php");
  }
  else{
    echo "CPF ou Senha incorretos!";
};

 ?>
