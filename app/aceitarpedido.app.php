<?php
  include "../includes/conecta.php";
  session_start();

  $id = $_SESSION['id'];
  $pedido = $_POST['idpedido'];

  echo "$id <br> $pedido";

  $sql = "UPDATE `nanotec`.`pedido` SET `status_p` = 'andamento', `id_equipe` = '$id' WHERE `pedido`.`id` = $pedido";
  $result = $conn -> query($sql);

  // header("Location: ../view/Equipe/painelequipe.view.php");
 ?>
