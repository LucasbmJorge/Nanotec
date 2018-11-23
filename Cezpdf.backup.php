<?php
 session_start();
   //Inclui a classe 'class.ezpdf.php'
   include("../PDF/src/Cezpdf.php");
   include("../includes/mascara.php");




   //Instancia um novo documento com o nome de pdf
   $pdf = new Cezpdf();

   //Seleciona a fonte que será usada. As fontes estão localizadas na pasta "pdf-php/fonts". Use a de sua preferencia.
   $pdf -> selectFont('pdf-php/fonts/Helvetica.afm');

   //Chama o método "ezText".
   //No 1° parametro passa o texto do documento
   //No 2° parametro define o tamanho da fonte.
   //No 3° parametro é do tipo array. A seguir uma explicação desse 3° parametro:

   // justification => seta a posição de um label, pode ser center, right, left, aright, ou aleft
   // leading = > define o tamanho que cada linha usará para se mostrada, deverá  ser um int
   // spacing => define o espaçamento entrelinhas, deverá ser um float
   // você pode usar apenas leading ou apenas spacing, nunca os dois.

   // $pdf -> ezText('DevMedia Group!', 20, array(justification => 'center', spacing => 2.0));
   // $pdf -> ezText('Olá Pessoal. Obrigado por estarem acompanhando mais este artigo!', 15, array(justification => 'left', spacing => 3.0));
   // $pdf -> ezText('Acessem o portal da DevMedia Group: www.devmedia.com.br!', 10, array(justification => 'right', spacing => 1.0));

   // $img = ImageCreatefrompng('../images/01-home.png');
   // $pdf->addImage($img, 0, 800, 107, 50);
   // $pdf -> line(x1, y1, x2, y2); x1 & y1 = line start,  x2 & y2 = line end;
$pdf -> setColor(0,0,215);
   $pdf -> ezText("NANOTEC", 25, array(justification=> 'left', spacing => 1.0));
$pdf -> setColor(0,0,0);
   $pdf -> ezText("Ordem de serviço", 10, array(justification=> 'right', spacing => -1.0));
   $pdf -> ezText("N° $nomecliente", 10, array(justification=> 'right', spacing => 1.0));

   //Equipe --------------------
   $pdf -> ezText("    Equipe", 12, array(justification=> 'left', spacing => 2.2));

   // Linha 1 ------------------
   $pdf -> ezText("      NOME", 9, array(justification=> 'left', spacing => 1.7));
   $pdf -> ezText("CPF/CNPJ                                              ",
    9, array(justification=> 'right', spacing => 0));

   //Linha 2 --------------
   $pdf -> ezText("      TELEFONE", 9, array(justification=> 'left', spacing => 4.0));
   $pdf -> ezText("E-MAIL",9, array(justification=> 'center', spacing => 0));

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
   $pdf -> ezText("    Cliente", 12, array(justification=> 'left', spacing => 6.6));

   // Linha 1 ------------------
   $pdf -> ezText("      NOME", 9, array(justification=> 'left', spacing => 1.7));
   $pdf -> ezText("CPF/CNPJ                                              ",
    9, array(justification=> 'right', spacing => 0));

   //Linha 2 --------------
   $pdf -> ezText("      TELEFONE", 9, array(justification=> 'left', spacing => 4.0));
   $pdf -> ezText("E-MAIL",9, array(justification=> 'center', spacing => 0));
   // $pdf -> line(x1, y1, x2, y2); x1 & y1 = line start,  x2 & y2 = line end;

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
   $pdf -> ezText("    Serviço", 12, array(justification=> 'left', spacing => 6.4));

   // Linha 1 ------------------
   $pdf -> ezText("      TIPO DO SERVIÇO", 9, array(justification=> 'left', spacing => 1.7));
   $pdf -> ezText("VALOR TOTAL                                       ",9, array(justification=> 'right', spacing => 0));
   $pdf -> ezText("DATA DE ENTREGA                ", 9, array(justification=> 'center', spacing => 0));
   $pdf -> ezText("DIAGNOSTICO DE SERVIÇO", 9, array(justification=> 'center', spacing => 4.0));
   $pdf -> ezText("SOLUÇÃO", 9, array(justification=> 'center', spacing => 9.8));


   //Linhas --------------------

   $pdf -> line(40,450,550,450);
   $pdf -> line(40,410,550,410);
   $pdf -> line(40,310,550,310);
   $pdf -> line(40,200,550,200);

   //Colunas -------------------
   $pdf -> line(40,450,40,200);
   $pdf -> line(400,450,400,410);
   $pdf -> line(230,450,230,410);
   $pdf -> line(550,450,550,200);



   $pdf -> ezStream();
?>
