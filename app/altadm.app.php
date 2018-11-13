<?php
 include "../includes/conecta.php";
 session_start();

 if (!isset($_SESSION['administrador'])) {
   header("Location:../");
 }

  $id_adm = $_SESSION['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  $sql = "UPDATE `nanotec`.`funcionario` SET
  `nome_adm` = '$nome',
  `email_adm` = '$email',
  `usuario_adm` = '$usuario',
  `senha_adm` = '$senha'
  WHERE `funcionario`.`id_adm` = $id_adm";

  $result = $conn->query($sql);

  header("Location:../");


  ?>
