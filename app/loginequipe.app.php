<?php
 session_start();
 include "../includes/conecta.php";

  $login = $_POST['login'];
  $senha = $_POST['senha'];

  if (!ctype_digit($login)) {
    echo "$login, $senha";
   $sql = "SELECT * FROM `equipe` WHERE nome_da_equipe = '$login' && senha_equipe = '$senha';";
   $result = $conn -> query($sql);

   if($row = $result->fetch_assoc()){

    $_SESSION['chave'] = $row['chave_equipe'];
    $_SESSION['id'] = $row['id_equipe'];
    $_SESSION['nome'] = $row['nome_da_equipe'];
    $_SESSION['email'] = $row['email_equipe'];
    $_SESSION['tipologin'] = 'equipe';

    header("Location:../view/Equipe/painelequipe.view.php");
  }
  else{
    echo "Login ou Senha incorretos!";
}
}//FIM ctype;


  else {
    echo "$login, $senha";
  $sql = "SELECT * FROM `nanotec` . `equipe` WHERE cpf_cnpj='$cpf' && senha_equipe ='$senha'";
  $result = $conn -> query($sql);

   if($row = $result->fetch_assoc()){

    $_SESSION['id'] = $row['chave_equipe'];
    $_SESSION['id_numero'] = $row['id_equipe'];
    $_SESSION['nome'] = $row['nome_da_equipe'];
    $_SESSION['email'] = $row['email_equipe'];
    $_SESSION['tipologin'] = 'equipe';

    header("Location:../view/Equipe/painelequipe.view.php");
 }
 else{
   echo "CPF ou Senha incorretos!";
}
}//FIM else;




 ?>
