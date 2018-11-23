<?php
 session_start();
 include "../includes/conecta.php";
 $essaequipe = $_SESSION['essaequipe'];


  $sql = "DELETE FROM `equipetemp` WHERE chave_equipe = '$essaequipe'";
 $result = $conn -> query($sql);

 $sqlo = "DELETE FROM `servicotemp` WHERE chave_equipe = '$essaequipe'";
 $resulto = $conn -> query($sqlo);

 header("Location:../view/Admin/registroequipe.view.php");

 ?>
