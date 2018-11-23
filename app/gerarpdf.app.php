<?php
 session_start();
   //Inclui a classe 'class.ezpdf.php'
   include("../PDF/src/Cezpdf.php");
   include("../includes/mascara.php");
   include("../includes/conecta.php");

      $id_pedido = $_POST['id_pedido'];

   // Puxar pedido concluido -----------------------------------------

    $valor_total = $_POST['valortotal'];
    $servico = $_POST['servico'];
    $data_pedido = date("d/m/Y");

    $sol = "SELECT * FROM `pedidos_completos` WHERE pedido_id = '$id_pedido'";
    $result = $conn ->query($sol);

    if($row = $result -> fetch_assoc()){
      $numeroOS = $row['id'];
      $id_equipe = $row['equipe_id'];
      $cliente_id = $row['cliente_id'];
      $valor_total = $row['valor'];
      $servico = $row['servico_realizado'];
    }

   // Puxar dados da equipe ----------------------------------------

   $sil = "SELECT * FROM `equipe` WHERE id_equipe = '$id_equipe'";
   $result = $conn ->query($sil);

   if($row = $result -> fetch_assoc()){
     $nome_da_equipe = $row['nome_da_equipe'];
     $cpj_equipe = Mask('##.###.###/####-##', $row['cnpj_equipe']);
     $email_equipe = $row['email_equipe'];
     $telefone_equipe = Mask("(##)####-####", $row['telefone_equipe']);


   }


  // Puxar dados do cliente -----------------------------------------

    $sql = "SELECT * FROM `cliente` WHERE id_cliente='$cliente_id'";
    $result = $conn ->query($sql);

   if ($row = $result->fetch_assoc()) {
    $nome_cliente = $row['nome_cliente'];
    $cpj_cliente = Mask('###.###.###-##', $row['cpf_cnpj']);
    $empresa_cliente = $row['empresa_cliente'];
    $telefone_cliente = Mask('(##)####-####', $row['telefone_cliente']);
    $email_cliente = $row['email_cliente'];
   }//FIM if;


// puxar dados do pedido -------------------------------

   $pedido = "SELECT * FROM `pedido`WHERE id = '$id_pedido'";
   $result = $conn -> query($pedido);

   if($row = $result ->fetch_assoc()){
     $observacao = $row['observacao'];
     $tipo_pedido = $row['tipo_pedido'];
   }


   $pdf = new Cezpdf();
   $pdf -> selectFont('pdf-php/fonts/Helvetica.afm');



   // $pdf -> setColor(1,1,1);
   $pdf -> ezText("NANOTEC", 25, array(justification=> 'center', spacing => 1.0));
$pdf -> setColor(0,0,0);
   $pdf -> ezText("<b>Ordem de serviço</b>", 10, array(justification=> 'right', spacing => -1.0));
   $pdf -> ezText("<b>N° $numeroOS</b>", 10, array(justification=> 'right', spacing => 1.0));



   //Equipe --------------------
   $pdf -> ezText("    Equipe", 12, array(justification=> 'left', spacing => 2.2));

   // Linha 1 ------------------
   $pdf -> ezText("      <b>NOME</b>", 9, array(justification=> 'left', spacing => 1.7));
   $pdf -> ezText("<b>CPF/CNPJ</b>                                              ",9, array(justification=> 'right', spacing => 0));

   $pdf -> ezText("               $nome_da_equipe", 9, array(justification=> 'left', spacing => 1.5));
   $pdf -> ezText("$cpj_equipe                         ", 9, array(justification=> 'right', spacing => 0));


   //Linha 2 --------------
   $pdf -> ezText("      <b>TELEFONE</b>", 9, array(justification=> 'left', spacing => 2.1));
   $pdf -> ezText("<b>E-MAIL</b>",9, array(justification=> 'center', spacing => 0));

  $pdf -> ezText("               $telefone_equipe", 9, array(justification=> 'left', spacing => 1.5));
  $pdf -> ezText("                                      $email_equipe",9, array(justification=> 'center', spacing => 0));

   //Linhas --------------------
   $pdf -> line(40,750,550,750);
   $pdf -> line(40,710,550,710);
   $pdf -> line(40,670,550,670);

   //Colunas -------------------
   $pdf -> line(40,670,40,750);
   $pdf -> line(550,670,550,750);
   $pdf -> line(400,750,400,710);
   $pdf -> line(275,670,275,710);
   //Gera o PDF







   // Cliente -------------------
   $pdf -> ezText("    Cliente", 12, array(justification=> 'left', spacing => 5.8));

   // Linha 1 ------------------
   $pdf -> ezText("      <b>NOME</b>", 9, array(justification=> 'left', spacing => 1.7));
   $pdf -> ezText("<b>CPF/CNPJ</b>                                              ",
    9, array(justification=> 'right', spacing => 0));

    $pdf -> ezText("               $nome_cliente", 9, array(justification=> 'left', spacing => 1.5));
    $pdf -> ezText("$cpj_cliente                         ", 9, array(justification=> 'right', spacing => 0));

   //Linha 2 --------------
   $pdf -> ezText("      <b>TELEFONE</b>", 9, array(justification=> 'left', spacing => 2.1));
   $pdf -> ezText("<b>E-MAIL</b>",9, array(justification=> 'center', spacing => 0));

  $pdf -> ezText("               $telefone_cliente", 9, array(justification=> 'left', spacing => 1.5));
  $pdf -> ezText("                                             $email_cliente",9, array(justification=> 'center', spacing => 0));


   //Linhas --------------------

   $pdf -> line(40,600,550,600);
   $pdf -> line(40,560,550,560);
   $pdf -> line(40,520,550,520);

   //Colunas -------------------
   $pdf -> line(40,600,40,520);
   $pdf -> line(550,600,550,520);

   $pdf -> line(400,600,400,560);
   $pdf -> line(275,560,275,520);







   // Serviço -------------------
   $pdf -> ezText("    Serviço", 12, array(justification=> 'left', spacing => 5.4));

   // Linha 1 ------------------
   $pdf -> ezText("      <b>TIPO DO SERVIÇO</b>", 9, array(justification=> 'left', spacing => 1.7));
   $pdf -> ezText("<b>VALOR TOTAL</b>                                       ",9, array(justification=> 'right', spacing => 0));
   $pdf -> ezText("<b>DATA DE ENTREGA</b>                ", 9, array(justification=> 'center', spacing => 0));

   $pdf -> ezText("$valor_total                               ", 9, array(justification=> 'right', spacing => 1.5));
   $pdf -> ezText("$data_pedido", 9, array(justification=> 'center', spacing => 0.0));
   $pdf -> ezText("                             $tipo_pedido", 9, array(justification=> 'left', leading => 0.0));




   $pdf -> ezText("<b>PROBLEMA INFORMADO:</b>", 9, array(justification=> 'center', spacing => 5.0));

   $pdf -> ezText(" $observacao", 9, array(justification=> 'center', spacing => 1.3));

   $pdf -> ezText("<b>SERVIÇO REALIZADO</b>", 9, array(justification=> 'center', spacing => 5.0));

   $pdf -> ezText(" $servico", 9, array(justification=> 'center', spacing => 1.3));


   //Linhas --------------------

   $pdf -> line(40,450,550,450);
   $pdf -> line(40,410,550,410);
   // $pdf -> line(40,310,550,310);
   // $pdf -> line(40,200,550,200);

   //Colunas -------------------
   $pdf -> line(40,450,40,410);
   $pdf -> line(400,450,400,410);
   $pdf -> line(230,450,230,410);
   $pdf -> line(550,450,550,410);

  // echo "$id_pedido";
   $pdf -> ezStream();
?>
