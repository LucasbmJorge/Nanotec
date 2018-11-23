<?php
 session_start();
   //Inclui a classe 'class.ezpdf.php'
   include("../PDF/src/Cezpdf.php");
   include("../includes/mascara.php");
   include("../includes/conecta.php");

   $pdf = new Cezpdf();
   $pdf -> selectFont('pdf-php/fonts/Helvetica.afm');
   $pdf -> ezSetMargins(10, 1, 50, 50);

   $meshoje = date("m");
   $anohoje = date("Y");

   $pdf -> ezText("Equipes aceitas no mês $meshoje de $anohoje    ", 25, array(justification=> 'center', leading => 5.0));


   $sql = "SELECT * FROM `equipe` WHERE month(data_cadastro) = '$meshoje' AND year(data_cadastro) = $anohoje";
   $result = $conn -> query($sql);

   while($row = $result-> fetch_assoc()) {
     $nomee = $row['nome_da_equipe'];
     $cnpje = Mask('##.###.###/####-##', $row['cnpj_equipe']);
     $integrantese = $row['numero_integrantes'];
     $enderecoe = $row['endereco_equipe'];
     $telefonee = $row['telefone_equipe'];
     $emaile = $row['email_equipe'];

     $data = $row['data_cadastro'];
     $datac = date("d / m / Y", strtotime($data));

       $pdf -> ezText("<b>Nome:</b> $nomee", 10, array(justification=> 'left', spacing => 5.0));
       $pdf -> ezText("                                                                                                    <b>CNPJ:</b> $cnpje", 10, array(justification=> 'left', spacing => 0.0));
       $pdf -> ezText("<b>Integrantes:</b> $integrantese", 10, array(justification=> 'left', spacing => 2.0));
       $pdf -> ezText("                                                                                                    <b>Endereço:</b> $enderecoe", 10, array(justification=> 'left', spacing => 0.0));
       $pdf -> ezText("<b>Telefone:</b> $telefonee", 10, array(justification=> 'left', spacing => 2.0));
       $pdf -> ezText("                                                                                                    <b>Email:</b> $emaile", 10, array(justification=> 'left', spacing => 0.0));


   }


      $pdf -> ezStream();
