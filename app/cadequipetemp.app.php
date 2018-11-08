<?php
 session_start();
 include "../includes/conecta.php";

 $nomee = $_POST['nomee'];
 $recicla = $_POST['cnpje'];
 $cnpje = preg_replace("/[^0-9]/", "", "$recicla" );
 $integrantese = $_POST['integrantese'];
 $enderecoe = $_POST['enderecoe'];

 $refaz = $_POST['telefonee'];
 $telefonee = preg_replace("/[^0-9]/", "", "$refaz" );

 $emaile = $_POST['emaile'];
 $senhae = $_POST['senhae'];

 $uid = uniqid("", true);


 // Especializaçao:--------------------------------
  $banco = isset($_POST['bancodedados'])? true : false;
  $rede = isset($_POST['redesadm'])? true : false;
  $analise = isset($_POST['analisesistemas'])? true : false;
  $desenvolvimento = isset($_POST['desenvolvimentosistemas'])? true : false;
  $montagem = isset($_POST['montagemmanutencao'])? true : false;
  $sites = isset($_POST['criacaosites'])? true : false;


 // Registra no banco de dados 'equipetemp':--------------------------------------
  $sql="INSERT INTO `nanotec`.`equipetemp` (`nome_da_equipe`, `cnpj_equipe`, `numero_integrantes`, `endereco_equipe`, `telefone_equipe`, `email_equipe`, `senha_equipe`, `chave_equipe`)
   VALUES ('$nomee', '$cnpje', '$integrantese', '$enderecoe', '$telefonee', '$emaile', '$senhae', '$uid');";

   $result = $conn->query($sql);

// Cria uma entrada na tabela servicos temp: ------------------------------

    $sqlservico="INSERT INTO `nanotec`.`servicotemp` (`chave_equipe`, `banco_de_dados`, `criacao_de_redes`, `analise_de_sistemas`, `desenvolvimento_de_sistemas`, `montagem_e_manutencao`, `criacao_de_sites`)
    VALUES ('$uid', '$banco', '$rede', '$analise', '$desenvolvimento', '$montagem', '$sites'); ";

    $resultservico = $conn->query($sqlservico);

    header("Location: ../view/registrandolhe.php");





 ?>
