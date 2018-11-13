<?php
 include "../../includes/conecta.php";
  include "../../includes/mascara.php";

 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 } else{
 $nome = $_SESSION['nome'];
 $id = $_SESSION['id'];
 $email = $_SESSION['email'];

}

include "../../includes/head.php";
 ?>

 <body id="green">

 <header>
   <?php include 'clinav.php'; ?>
 </header>

  <main>
    <div class="pedidos">
      <h2>Meus pedidos</h2>
      <?php

        $sql = "SELECT * FROM `pedido` WHERE id_cliente = $id ORDER BY status_p desc, data_pedido desc";

        $result = $conn -> query($sql);


        while( $row = $result->fetch_assoc()){
         $cidade = $row['cidade'];
         $endereco = $row['endereco'];
         $tipo_pedido = $row['tipo_pedido'];
         $orcamento = $row['orcamento'];
         $observacao = $row['observacao'];
         $data_pedido = $row['data_pedido'];
         $newDate = date("d/m/Y", strtotime($data_pedido));
         $status_p = $row['status_p'];
         $id_cliente = $row['id_cliente'];
         $id_equipe = $row['id_equipe'];

                if($status_p == 'andamento'){
        $sqlo = "SELECT * FROM `equipe` WHERE id_equipe = $id_equipe";
        $resulto = $conn -> query($sqlo);
        if($col = $resulto -> fetch_assoc()){
          $equipe = $col['nome_da_equipe'];
          $equipemail = $col['email_equipe'];
          $equipefone = $col['telefone_equipe'];
                  echo"
                <div class='pedido'>
                  <p class='col l-5 '><b>Tipo de pedido:</b> $tipo_pedido</p>
                  <p class='col l-5 '><b>Endereço:</b> $endereco</p>
                  <p class='col l-5 '><b>Orçamento:</b> $orcamento</p>
                  <p class='col l-5 '><b>Observação:</b> $observacao</p>
                  <p class='col l-5 '><b>Data do pedido:</b> $newDate</p>
                  <p class='col l-5 '><b>Status do pedido:</b> $status_p</p>
                  <p class='col l-5 '><b>Equipe:</b> $equipe</p>
                  <p class='col l-5 '><b>E-mail da Equipe:</b> $equipemail</p>
                  <p class='col l-5 '><b>Telefone da Equipe:</b> $equipefone</p>
                </div>";

        }
      }else if($status_p == 'aberto'){

              echo"
              <div class='pedido'>
                <p class='col l-5 '><b>Tipo de pedido:</b> $tipo_pedido</p>
                <p class='col l-5 '><b>Endereço:</b> $endereco</p>
                <p class='col l-5 '><b>Orçamento:</b> $orcamento</p>
                <p class='col l-5 '><b>Observação:</b> $observacao</p>
                <p class='col l-5 '><b>Data do pedido:</b> $newDate</p>
                <p class='col l-5 '><b>Status do pedido:</b> $status_p</p>
              </div>";
            }//FIM else;

    }//FIM while;
        ?>

    </div>
  </main>
