<?php
 include "../../includes/conecta.php";

 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 } else{
 $nome = $_SESSION['nome'];
 $chave = $_SESSION['chave'];
 $email = $_SESSION['email'];

}
include "../../includes/head.php";
 ?>

 <body id="painel">

 <header>
   <nav>
   <a href="#" class="col nanotec">NANOTEC</a>
     <ul>
       <a href='painelequipe.view.php'><li>PAINEL</li></a>
       <a href=""><li>SOBRE NÓS</li></a>
     </ul>
   </nav>
 </header>

 <main> <br> <br>
 <div class='controle'>
   <?php
     $sql = "SELECT * FROM `servico` WHERE chave_equipe = '$chave'";

     $result = mysqli_query($conn, $sql);

   if($row = $result -> fetch_assoc()){
     $banco = $row['banco_de_dados'];
     $criacao = $row['criacao_de_redes'];
     $analise = $row['analise_de_sistemas'];
     $desenvolvimento = $row['desenvolvimento_de_sistemas'];
     $montagem = $row['montagem_e_manutencao'];
     $sites = $row['criacao_de_sites'];
   }

   $sql = "SELECT * FROM `pedido` WHERE status_p = 'aberto' order by data_pedido desc";
   $result = $conn -> query($sql);

   while($row = $result -> fetch_assoc()){
     $id_pedido = $row['id'];
     $cidade = $row['cidade'];
     $endereco = $row['endereco'];
     $tipo = $row['tipo_pedido'];
     $orcamento = $row['orcamento'];
     $obs = $row['observacao'];
     $data_pedido = $row['data_pedido'];
     $data = date("d / m / Y", strtotime($data_pedido));
     $id_cliente = $row['id_cliente'];

     $sol = "SELECT * from `cliente` WHERE id_cliente = '$id_cliente'";
     $resultado = $conn -> query($sol);

     if($col = $resultado ->fetch_assoc()){
       $cliente = $col['nome_cliente'];
     }

     switch ($tipo) {

       case 'bancodedados':
           if ($banco) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> Bando de Dados</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Valor:<br></b> $orcamento</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='../../app/aceitarpedido.app.php' method='post'>
  <input type='hidden' name='idpedido' value='$id_pedido'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }
         break;
       case 'redes':
           if ($criacao) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> Redes</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Valor:<br></b> $orcamento</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='../../app/aceitarpedido.app.php' method='post'>
  <input type='hidden' name='idpedido' value='$id_pedido'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }
         break;
       case 'analise':
           if ($analise) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> Analise e Desenvolvimento de Sistemas</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Valor:<br></b> $orcamento</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='../../app/aceitarpedido.app.php' method='post'>
  <input type='hidden' name='idpedido' value='$id_pedido'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }
         break;
       case 'desenvolvimento':
           if ($desenvolvimento) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> $tipo</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Valor:<br></b> $orcamento</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='../../app/aceitarpedido.app.php' method='post'>
  <input type='hidden' name='idpedido' value='$id_pedido'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }
         break;
       case 'montagem':
           if ($montagem) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> $tipo</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Valor:<br></b> $orcamento</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='../../app/aceitarpedido.app.php' method='post'>
  <input type='hidden' name='idpedido' value='$id_pedido'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }
         break;
       case 'sites':
           if ($sites) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> $tipo</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Valor:<br></b> $orcamento</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='../../app/aceitarpedido.app.php' method='post'>
  <input type='hidden' name='idpedido' value='$id_pedido'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }

       default:
         break;
     }
   }//FIM where;




    ?>
 </div>

 </main>

 </body>
