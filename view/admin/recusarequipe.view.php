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


 $essa = $_SESSION['essaequipe'];

  // Puxa as informaçoes da tabela equipetemp:---------------------
  $sql="SELECT * FROM `equipetemp` WHERE chave_equipe = '$essa';";

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

 </body>
