<?php
 include "../../includes/conecta.php";

 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 } else{
 $nome = $_SESSION['nome'];
 $chave = $_SESSION['chave'];
 $id = $_SESSION['id'];
 $email = $_SESSION['email'];

}
include "../../includes/head.php";
include "../../includes/mascara.php";
 ?>

 <body id="painel">

 <header>
   <?php include "equinav.php"; ?>
 </header>

 <main>
 <div class='controle'>
   <?php

   $sql = "SELECT * FROM `pedido` WHERE id_equipe = '$id' && status_p = 'concluido' order by data_pedido desc";
   $result = $conn -> query($sql);

   while($row = $result -> fetch_assoc()){
     $id_pedido = $row['id'];
     $cidade = $row['cidade'];
     $endereco = $row['endereco'];
     $tipo_pedido = $row['tipo_pedido'];
     $orcamento = $row['orcamento'];
     $observacao = $row['observacao'];
     $data_pedido = $row['data_pedido'];
     $data = date("d / m / Y", strtotime($data_pedido));
     $id_cliente = $row['id_cliente'];

     $sol = "SELECT * from `cliente` WHERE id_cliente = '$id_cliente'";
     $resultado = $conn -> query($sol);

     if($col = $resultado ->fetch_assoc()){
       $cliente = $col['nome_cliente'];
       $telefono = $col['telefone_cliente'];
       $telefone_cliente = Mask('(##)####-####', $telefono);
       $email_cliente = $col['email_cliente'];
       $cpf = $col['cpf_cnpj'];
     }

     echo "<div class='pedido'>
     <p><b>Cliente</b>: <br> $cliente</p>
       <p class='col l-5 '><b>Tipo de pedido:</b> <br> $tipo_pedido</p>
       <p class='col l-5 '><b>Endereço:</b> <br> $endereco</p>
       <p class='col l-5 '><b>Orçamento:</b> <br> $orcamento</p>
       <p class='col l-5 '><b>Observação:</b> <br> $observacao</p>
       <p class='col l-5 '><b>Data do pedido:</b> <br> $data</p>
       <p class='col l-5 '><b>E-mail do Cliente:</b> <br> $email_cliente</p>
       <p class='col l-8 '><b>Telefone do Cliente:</b> <br> $telefone_cliente</p> <br> <br>
         <form action='../../app/gerarpdf.app.php' method='post'>
           <input type='hidden' name='cpf_cliente' value='$cpf'>
           <input type='hidden' name='id_pedido' value='$id_pedido'>
           <button type='submit'>Gerar Ordem de Serviço</button>
         </form>
     </div>";
   }//FIM where;




    ?>
 </div>
 </main>

 </body>
