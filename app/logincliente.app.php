<?php
 session_start();
 include "../includes/conecta.php";

  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM `cliente` WHERE cpf_cnpj='$cpf' && senha='$senha'";

  $result=mysqli_query($conn, $sql);

  if($row = $result->fetch_assoc()){

  $nome = $row['nome_cliente'];
  $_SESSION['id'] = $row['id_cliente'];
  $_SESSION['nome'] = $row['nome_cliente'];
  $_SESSION['email'] = $row['email_cliente'];
  $_SESSION['tipologin'] = 'cliente';

  header("Location:../view/Cliente/painelcliente.view.php");

  }
  else{
    echo "CPF ou Senha incorretos!";
};

 ?>
