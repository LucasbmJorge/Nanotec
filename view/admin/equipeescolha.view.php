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
     <form class="controle" action="altequipe.view.php" method="post">
       <?php
       $sql = "SELECT * FROM `equipe`";
       $result = $conn -> query($sql);

    while ($row = $result->fetch_assoc()){
      $nome_equipe = $row['nome_da_equipe'];
      $id_equipe = $row['id_equipe'];

      echo "
      <button type='submit' name='equipe' value='$id_equipe'>$nome_equipe</button>";
    }
        ?>
     </form>
   </main>
  </body>
