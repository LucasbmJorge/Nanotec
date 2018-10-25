<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];

 if(!$adm){
   session_destroy();
   header("Location: ../../");
 }
 else{
  include '../../includes/head2.php';
  include '../../conecta.php';


  $queequipe = $_POST['queequipe'];

  // Puxa as informaçoes da tabela equipetemp:---------------------
  $sql="SELECT * FROM `equipetemp` WHERE id_equipe = '$queequipe';";

  $result = $conn -> query($sql);

  if ($row = $result->fetch_assoc()){
    $nomee = $row['nome_da_equipe'];
    $cnpje = $row['cnpj_equipe'];
    $integrantes = $row['numero_integrantes'];
    $enderecoe = $row['endereco_equipe'];
    $telefonee = $row['telefone_equipe'];
    $emaile = $row['email_equipe'];
    $uide = $row['chave_equipe'];

    $_SESSION['essaequipe'] = $uide;

  }


  $sql="SELECT * FROM `servicotemp` WHERE chave_equipe = '$uide';";
  $result = $conn -> query($sql);

  if($row = $result->fetch_assoc()){
    $banco = $row['banco_de_dados'];
    $redes = $row['criacao_de_redes'];
    $analise = $row['analise_de_sistemas'];
    $desenvolvimento = $row['desenvolvimento_de_sistemas'];
    $montagem = $row['montagem_e_manutencao'];
    $sites = $row['criacao_de_sites'];
  }


}//FIM else;
 ?>


 <body id="painel">
   <div class="col controle visor">
     <h2>Detalhes da equipe:</h2>
     <div class="col l-8 ">

     <?php
     echo "<p>Nome da equipe: $nomee</p>
     <p>cnpj da equipe: $cnpje</p>
     <p>numero de integrantes: $integrantes</p>
     <p>Endereço da equipe: $enderecoe</p>
     <p>Telefone: $telefonee</p>
     <p>Email: $emaile</p>";
      ?>
     </div>

     <div class="col l-7">
       <h3>Especializações:</h3>
       <ul>
         <?php
         if($banco){ echo"<li>Banco de dados</li>";}
         if($redes){ echo"<li>Criação de redes</li>";}
         if($analise){ echo"<li>Análise de sistemas</li>";}
         if($desenvolvimento){ echo"<li>Desenvolvimento de sistemas</li>";}
         if($montagem){ echo"<li>Montagem e manutenção de computadores</li>";}
         if($sites){ echo"<li>Criação de sites</li>";}
          ?>
       </ul>
     </div>

     <a href="../../app/aprovarequipe.app.php">Aprovar</a>
     <a href="">Recusar</a>
   </div>
 </body>
