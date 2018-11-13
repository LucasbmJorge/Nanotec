<?php
  if (!isset($_SESSION["id"])) {
    header("Location: ../../");
  } else if($_SESSION['tipologin'] != 'equipe'){
    header("Location: ../../");
  }
 ?>

 <nav>
 <a href="#" class="col nanotec">NANOTEC</a>
   <ul>
     <a href="painelequipe.view.php"><li>PAINEL</li></a>
     <a href="../../"><li>SOBRE NÓS</li></a>
   </ul>
 </nav>
