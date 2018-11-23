<?php

include "../includes/conecta.php";
 session_start();


 if (!isset($_SESSION["id"]) || $_SESSION['tipologin'] != 'cliente'){
   header("Location: ../");
 }

 $id_cliente = $_SESSION['id'];
 $cidade = $_POST['cidade'];
 $endereco = $_POST['endereco'];
 $tipopedido = $_POST['tipopedido'];
 $orcamento = $_POST['orcamento'];
 $observacao = $_POST['observacao'];
 $data_pedido = date("Y-m-d");


 $sql="INSERT INTO `nanotec`.`pedido` (`cidade`, `endereco`, `tipo_pedido`, `orcamento`, `observacao`, `data_pedido`, `status_p`, `id_cliente`, `id_equipe`)
 VALUES ('$cidade', '$endereco', '$tipopedido', NULL, '$observacao', '$data_pedido', 'aberto', '$id_cliente', NULL);";
 ?>


   <!DOCTYPE html>
   <html lang="pt" dir="ltr">
     <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
       <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
       <link rel="stylesheet" href="../CSS/styles.css">
     </head>

     <body id="blue">

   <header>
      <nav>
      <a href="../" class="col nanotec">NANOTEC</a>
        <ul>
          <a href="../view/Cliente/painelcliente.view.php"><li>PAINEL</li></a>
          <a href="../"><li>SOBRE NÓS</li></a>
        </ul>
      </nav>
       </header>

 <?php  if ($result= $conn->query($sql)) { ?>

        <div class="box">
          <h2>Pedido realizado com sucesso!</h2>
          <a href="../view/Cliente/fazerpedido.view.php">Fazer outro pedido</a>
          <a href="../view/Cliente/painelcliente.view.php">Voltar ao painel</a>
          <a href="../view/Cliente/acompanharpedido.view.php">Lista de pedidos</a>
        </div>
      </body>
  <?php } else { ?>

        <div class="box">
          <h2>Houve um erro com seu pedido!</h2>
          <a href="../view/Cliente/fazerpedido.view.php">Tentar novamente</a>
          <a href="../view/Cliente/painelcliente.view.php">Voltar ao painel</a>
          <a href="../view/Cliente/acompanharpedido.view.php">Lista de pedidos</a>
        </div>
      </body>

  <?php } ?>
