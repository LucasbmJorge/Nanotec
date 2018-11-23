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
    $_SESSION['cnpj'] = $row['cnpj_equipe'];
    $_SESSION['telefone'] = $row['telefone_equipe'];
    $_SESSION['tipologin'] = 'equipe';

    header("Location:../view/Equipe/painelequipe.view.php");
  }
  else{ ?>
  <!DOCTYPE html>
  <html lang="pt" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
      <link rel="stylesheet" href="../CSS/styles.css">
    </head>

    <body id="blue">

  <header>
     <nav>
     <a href="../" class="col nanotec">NANOTEC</a>
       <ul>
         <a href="../view/Cadastro/cadescolha.view.php"><li>REGISTRAR</li></a>
         <a href="../view/login/logescolha.view.php"><li>LOGIN</li></a>
         <a href="../"><li>SOBRE NÓS</li></a>
       </ul>
     </nav>
      </header>
      <div class="box">
        <h2>Login ou Senha incorretos!</h2>
        <a href="../view/login/logequipe.view.php">Tentar novamente</a>
        <a href="../">Pagina inicial.</a>
      </div>
<?php };
}//FIM ctype;


  else {

    $sql = "SELECT * FROM `equipe` WHERE cnpj_equipe = '$login' && senha_equipe = '$senha';";
    $result = $conn -> query($sql);

   if($row = $result->fetch_assoc()){

    $_SESSION['id'] = $row['chave_equipe'];
    $_SESSION['id_numero'] = $row['id_equipe'];
    $_SESSION['nome'] = $row['nome_da_equipe'];
    $_SESSION['email'] = $row['email_equipe'];
    $_SESSION['tipologin'] = 'equipe';

    header("Location:../view/Equipe/painelequipe.view.php");
 }
 else{ ?>
 <!DOCTYPE html>
 <html lang="pt" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
     <link rel="stylesheet" href="../CSS/styles.css">
   </head>

   <body id="blue">

 <header>
    <nav>
    <a href="../" class="col nanotec">NANOTEC</a>
      <ul>
        <a href="../view/Cadastro/cadescolha.view.php"><li>REGISTRAR</li></a>
        <a href="../view/login/logescolha.view.php"><li>LOGIN</li></a>
        <a href="../"><li>SOBRE NÓS</li></a>
      </ul>
    </nav>
     </header>
     <div class="box">
       <h2>CPF/CNPJ ou Senha incorretos!</h2>
       <a href="../view/login/logequipe.view.php">Tentar novamente</a>
       <a href="../">Pagina inicial.</a>
     </div>
<?php };
}//FIM else;




 ?>
