<?php include "../includes/conecta.php";
 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 }

 $id_cliente = $_SESSION['id'];
 $cidade = $_POST['cidade'];
 $endereco = $_POST['endereco'];
 $tipopedido = $_POST['tipopedido'];
 $orcamento = $_POST['orcamento'];
 $observacao = $_POST['observacao'];
 $data_pedido = date("Y-m-d");


 $sql="INSERT INTO `nanotec`.`pedido` (`cidade`, `endereco`, `tipo_pedido`, `orcamento`, `observacao`, `data_pedido`, `status_p`, `id_cliente`, `id_equipe`)
 VALUES ('$cidade', '$endereco', '$tipopedido', '$orcamento', '$observacao', '$data_pedido', 'aberto', '$id_cliente', NULL);";


  $result= $conn->query($sql);

  echo "<br> <p>Pedido realizado com sucesso</p> <br>
   <a href='../view/Cliente/painelcliente.view.php'>Voltar</a>";
 ?>
