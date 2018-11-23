<?php
 session_start();
 include "../includes/conecta.php";

 if (!isset($_SESSION['id']) || $_SESSION['tipologin'] != 'equipe'){
   header("Location:../../");
 }

    // Puxar dados da equipe ----------------------------------------
    $equipe = $_SESSION['id'];

    // Puxar dados do pedido -----------------------------------------
    $pedido = $_POST['id_pedido'];
    $valor = $_POST['valortotal'];
    $servico = $_POST['servico'];


   // Puxar dados do cliente -----------------------------------------

   $cpj = $_POST['cpfcliente'];

   $check = "SELECT * FROM `cliente` WHERE cpf_cnpj = '$cpj'";
   $result = $conn ->query($check);

   if ($row = $result->fetch_assoc()) {
     $cliente = $row['id_cliente'];
   }


   $inserir = "INSERT INTO `nanotec`.`pedidos_completos` (`valor`, `servico_realizado`, `pedido_id`, `cliente_id`, `equipe_id`)
               VALUES ('$valor', '$servico', '$pedido', '$cliente', '$equipe')";

   $result = $conn -> query($inserir);


   $alterar = "UPDATE `nanotec`.`pedido` SET `status_p` = 'concluido' WHERE `id` = '$pedido'";
   $resulta = $conn -> query($alterar);

     header("Location: ../view/Equipe/pedidosfinalizados.view.php");

 ?>
