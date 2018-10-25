<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];

 if(!$adm){
   session_destroy();
   header("Location: ../../");
 }
 else{
  include '../../includes/head2.php';
  include '../../conecta.php';
}
 ?>

 <body id="painel">

   <div class="col controle">
     <h2>Equipes para registrar</h2>

     <form class="" action="verequipe.view.php" method="post">
       <?php

       $sql = "SELECT * FROM `equipetemp`";

       $result = $conn -> query($sql);

    while ($row = $result->fetch_assoc()){
      $idequipe = $row['id_equipe'];
      $nomeequipe = $row['nome_da_equipe'];

      echo "<button class='equipo' name='queequipe' type='submit' value='$idequipe'>$nomeequipe</button>";
    }
        ?>
     </form>
   </div>
  </body>
