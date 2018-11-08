<?php
 include "../conecta.php";

 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 } else{
 $nome = $_SESSION['nome'];
 $id = $_SESSION['id'];
 $email = $_SESSION['email'];

}
 include '../includes/head.php';
 ?>

 <body id="green">

 <header>
   <nav>
   <a href="#" class="col nanotec">NANOTEC</a>
     <ul>
       <a href='painelcliente.view.php'><li>PAINEL</li></a>
       <a href=""><li>SOBRE NÓS</li></a>
     </ul>
   </nav>
 </header>

  <main>
    <div class="pedidos">
      <h2>Meus pedidos</h2>
      <?php

        $sql = "SELECT * FROM `pedido` WHERE id_cliente = $id;";

        $result = $conn -> query($sql);


        while( $row = $result->fetch_assoc()){
         $cidade = $row['cidade'];
         $endereco = $row['endereco'];
         $tipo_pedido = $row['tipo_pedido'];
         $orcamento = $row['orcamento'];
         $observacao = $row['observacao'];
         $data_pedido = $row['data_pedido'];
         $newDate = date("d-m-Y", strtotime($data_pedido));
         $status_p = $row['status_p'];
         $id_cliente = $row['id_cliente'];
         $id_equipe = $row['id_equipe'];

         if($status_p == 'aberto'){

        echo"
        <div class='pedido'>
          <p class='col l-5 '><b>Tipo de pedido:</b> $tipo_pedido</p>
          <p class='col l-5 '><b>Endereço:</b> $endereco</p>
          <p class='col l-5 '><b>Orçamento:</b> $orcamento</p>
          <p class='col l-5 '><b>Observação:</b> $observacao</p>
          <p class='col l-5 '><b>Data do pedido:</b> $newDate</p>
          <p class='col l-5 '><b>Status do pedido:</b> $status_p</p>
        </div>";
      }
      else if($status_p == 'andamento'){
        $sqlo = "SELECT * FROM `equipe` WHERE id_equipe = $id_equipe";
        $resulto = $conn -> query($sqlo);
        if($row = $resulto -> fetch_assoc()){

        }
      }//FIM else;

    }//FIM while;
        ?>

    </div>
  </main>
