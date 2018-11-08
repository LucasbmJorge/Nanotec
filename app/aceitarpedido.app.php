<?php
  include "../includes/conecta.php";
  session_start();

  $id = $_SESSION['id_numero'];
  $pedido = $_POST['idpedido'];

  echo "$id <br> $pedido";

  $sql = "UPDATE `nanotec`.`pedido` SET `status_p` = 'aceito', `id_equipe` = '$id' WHERE `pedido`.`id` = $pedido";
  $result = $conn -> query($sql);

  // header("Location: ../view/painelequipe.view.php");
 ?>
