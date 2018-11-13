<?php

 include "../../includes/conecta.php";

 session_start();

   if (!isset($_SESSION['id']) || $_SESSION['tipologin'] != 'equipe'){
     header("Location:../../");
   }

   $id_equipe = $_SESSION['id'];


 include "../../includes/head.php";
 include "../../includes/mascara.php";

   $nomecliente = $_POST['nomecliente'];
   $enderecocliente = $_POST['enderecocliente'];
   $cpfcliente = $_POST['cpfcliente'];
   $cpf = Mask("###.###.###-##", $cpfcliente);
 ?>

  <body id="painel">
    <header>
    <?php  include "equinav.php"; ?>
    </header>

    <main>
      <div class="controle">
     <?php
      echo " <form action='../../app/gerarpdf.app.php' method='post'>
              <p><b>Cliente: </b><input type='hidden' name='nomecliente' value='$nomecliente'>$nomecliente</p>
              <p><b>Endereço: </b></label><input type='hidden' name='enderecocliente' value='$enderecocliente'>$enderecocliente</p>
              <p><b>CPF/CNPJ: </b></label><input type='hidden' name='cpfcliente' value='$cpfcliente'>$cpfcliente</p>

              <button type='submit'>Gerar PDF</button>
        </form> ";
        ?>
           </div>
   </main>
  </body>
</html>
