<?php
 session_start();
 include '../conecta.php';

 $essa = $_SESSION['essaequipe'];

 $sql = "SELECT * FROM `equipetemp` WHERE chave_equipe = '$essa';";

 $polvora = $conn -> query($sql);

 if($row = $polvora->fetch_assoc()){
     $nomee = $row['nome_da_equipe'];
     $cnpje = $row['cnpj_equipe'];
     $integrantes = $row['numero_integrantes'];
     $enderecoe = $row['endereco_equipe'];
     $telefonee = $row['telefone_equipe'];
     $emaile = $row['email_equipe'];
     $senha = $row['senha_equipe'];
     $uide = $row['chave_equipe'];
 }

 echo"'$nomee', '$cnpje', '$integrantes', '$enderecoe', '$telefonee', '$emaile', '$uide'<br>";

 $sql = "INSERT INTO `nanotec`.`equipe` (`nome_da_equipe`, `cnpj_equipe`, `numero_integrantes`, `endereco_equipe`, `telefone_equipe`, `email_equipe`, `senha_equipe`, 'chave_equipe')
         VALUES ('$nomee', '$cnpje', '$integrantes', '$enderecoe', '$telefonee', '$emaile', '$senha' '$uide')";

 $dinamite = $conn -> query($sql);


  $sql = "SELECT * FROM `servicotemp` WHERE chave_equipe = '$essa';";

  $polvora = $conn -> query($sql);

  if($row = $polvora-> fetch_assoc()){
    $banco = $row['banco_de_dados'];
    $redes = $row['criacao_de_redes'];
    $analise = $row['analise_de_sistemas'];
    $desenvolvimento = $row['desenvolvimento_de_sistemas'];
    $montagem = $row['montagem_e_manutencao'];
    $sites = $row['criacao_de_sites'];
  }

  echo "$uide, $banco, $redes, $analise, $desenvolvimento, $montagem, $sites";


  $sql = "INSERT INTO `nanotec`.`servico` (`chave_equipe`, `banco_de_dados`, `criacao_de_redes`, `analise_de_sistemas`, `desenvolvimento_de_sistemas`, `montagem_e_manutencao`, `criacao_de_sites`)
   VALUES ('$uide', '$banco', '$redes', '$analise', '$desenvolvimento', '$montagem', '$sites');";

  $dinamite = $conn -> query($sql);


  $sql = "DELETE FROM `nanotec`.`equipetemp` WHERE `equipetemp`.`chave_equipe` = '$uide'";
  $result = $conn -> query($sql);

  $sql = "DELETE FROM `nanotec`.`servicotemp` WHERE `servicotemp`.`chave_equipe` = '$uide'";
  $result = $conn -> query($sql);
 ?>
