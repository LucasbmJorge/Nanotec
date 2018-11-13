<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];
 $id = $_SESSION['id'];
 echo "$id";

 if(!$adm){
   session_destroy();
   header("Location: ../");
 } else{
   include "../../includes/head.php";
   include "../../includes/conecta.php";
}
 ?>


  <body id="painel">
    <header>
     <nav>
       <?php include "admnav.php"; ?>
     </nav>
   </header>
   <main>
     <form class="controle" action="altcliente.view.php" method="post">
       <?php
       $sql = "SELECT * FROM `cliente`";
       $result = $conn -> query($sql);

    while ($row = $result->fetch_assoc()){
      $nome_cliente = $row['nome_cliente'];
      $id_cliente = $row['id_cliente'];

      echo "
      <button type='submit' name='cliente' value='$id_cliente'>$nome_cliente</button>";
    }
        ?>
     </form>
   </main>
  </body>
