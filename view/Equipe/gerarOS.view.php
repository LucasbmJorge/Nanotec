<?php

 include "../../includes/conecta.php";

 session_start();

   if (!isset($_SESSION['id']) || $_SESSION['tipologin'] != 'equipe'){
     header("Location:../../");
   }

   $id_equipe = $_SESSION['id'];


 include "../../includes/head.php";
 include "../../includes/mascara.php";

   $id_pedido = $_POST['id_pedido'];
   $nomecliente = $_POST['nomecliente'];
   $enderecocliente = $_POST['enderecocliente'];
   $cpfcliente = $_POST['cpfcliente'];
   $telefone = $_POST['telefone'];
   $tipo_pedido = $_POST['tipopedido'];
   $email = $_POST['email'];
   $observacao = $_POST['observacao'];
   $cpf = Mask("###.###.###-##", $cpfcliente);
 ?>

  <body id="painel">
    <header>
    <?php  include "equinav.php"; ?>
    </header>

    <main>
      <div class="controle">
     <?php
      echo " <form  class='pedido' action='../../app/finalizarpedido.app.php' method='post'>
              <p><b>Cliente: </b><input type='hidden' name='nomecliente' value='$nomecliente'>$nomecliente</p>
              <p><b>Endereço: </b></label><input type='hidden' name='enderecocliente' value='$enderecocliente'>$enderecocliente</p>
              <p><b>CPF/CNPJ: </b></label><input type='hidden' name='cpfcliente' value='$cpfcliente'>$cpfcliente</p>
              <input type='hidden' name='tipopedido' value='$tipo_pedido'>
              <input type='hidden' name='observacao' value='$observacao'>
              <p><b>Valor total: </b> <input type='text' name='valortotal'> </p><br>
              <p><b>Serviço Realizado: </b></p> <br>
              <textarea class='' name='servico' maxlength='350' resize='none'></textarea>
              <input type='hidden' name='id_pedido' value='$id_pedido'>

            <br> <button type='submit'>Finalizar pedido</button>
        </form> ";
        ?>
           </div>


   </main>
  </body>
</html>
