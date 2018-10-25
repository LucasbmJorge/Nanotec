<?php
 session_start();
 include "../conecta.php";

  $cnpj = $_POST['cpf'];
  $senha = $_POST['senha'];

    $sql = "SELECT * FROM `equipe` WHERE cnpj_equipe='$cnpj' && senha='$senha'";

  $result=mysqli_query($conn, $sql);

  if($row = $result->fetch_assoc()){

  $nome = $row['nome_cliente'];
  $_SESSION['id'] = $row['id_cliente'];
  $_SESSION['nome'] = $row['nome_cliente'];
  $_SESSION['email'] = $row['email_cliente'];

  header("Location:../view/painelcliente.view.php");

  }
  else{
    echo "CPF ou Senha incorretos!";
};

 ?>
