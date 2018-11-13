<?php
 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 }
 $nome = $_SESSION['nome'];
 $id = $_SESSION['id'];
 $email = $_SESSION['email'];


 include "../../includes/head.php";
 ?>

 <body id="registro">

 <header>
   <?php include "clinav.php"; ?>
 </header>

 <main>

   <form class="cadastro" action="../../app/registropedido.app.php" method="post">
   <h1>Fazer pedido:</h1>

  <input type="text" name="cidade" placeholder="Cidade" required>
  <input type="text" name="endereco" placeholder="Endereço" required>

  <select name="tipopedido">
    <option value="#">Tipo de pedido</option>
    <option value="bancodedados">Banco de dados</option>
    <option value="redes">Redes</option>
    <option value="analise">Analise de sistemas</option>
    <option value="desenvolvimento">Desenvolvimento de sistemas</option>
    <option value="montagem">Montagem e manutenção</option>
    <option value="sites">Site</option>
  </select>

  <input type="text" name="orcamento" placeholder="Orçamento" required>
  <textarea name="observacao" placeholder="Observações:" required></textarea>

  <button type="submit" name="button">Enviar</button>
</form>
</main>

</body>
