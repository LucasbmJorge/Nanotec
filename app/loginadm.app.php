<?php
 session_start();
 include "../includes/conecta.php";

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM `funcionario` WHERE usuario_adm='$usuario' && senha_adm='$senha'";

  $result=mysqli_query($conn, $sql);

  if($row = $result->fetch_assoc()){

  $nome = $row['nome_cliente'];
  $_SESSION['id'] = $row['id_adm'];
  $_SESSION['nome'] = $row['nome_adm'];
  $_SESSION['email'] = $row['email_adm'];
  $_SESSION['administrador'] = true;

  header("Location:../view/painelAdm.view.php");

  }
  else{
    echo "Usuario ou senha incorretos";
};

 ?>
