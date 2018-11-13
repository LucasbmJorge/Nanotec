<?php
 include "../includes/conecta.php";

  $id_equipe = $_POST['equipe'];
  $nome = $_POST['nome'];
  $cnpj = $_POST['cnpj'];
  $integrantes = $_POST['integrantes'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "UPDATE `nanotec`.`equipe` SET
  `nome_da_equipe` = '$nome',
  `cnpj_equipe` = '$cnpj',
  `numero_integrantes` = '$integrantes',
  `endereco_equipe` = '$endereco',
  `telefone_equipe` = '$telefone',
  `email_equipe` = '$email',
  `senha_equipe` = '$senha'
  WHERE `equipe`.`id_equipe` = $id_equipe";

  $result = $conn->query($sql);

  header("Location:../")


  ?>
