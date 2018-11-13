<?php
  if (!isset($_SESSION['id']) || $_SESSION['administrador'] != true) {
    header("Location: ../../");
  }
 ?>

   <nav>
   <a href="#" class="col nanotec">NANOTEC</a>
     <ul>
       <a href="paineladm.view.php"><li>PAINEL</li></a>
       <a href="../../"><li>SOBRE NÓS</li></a>
     </ul>
   </nav>
