<?php
 session_start();
 include "../includes/conecta.php";

  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM `cliente` WHERE cpf_cnpj='$cpf' && senha='$senha'";
  $result = mysqli_query($conn, $sql);

  if($row = $result->fetch_assoc()){

  $nome = $row['nome_cliente'];
  $_SESSION['id'] = $row['id_cliente'];
  $_SESSION['nome'] = $row['nome_cliente'];
  $_SESSION['email'] = $row['email_cliente'];
  $_SESSION['tipologin'] = 'cliente';

  header("Location:../view/Cliente/painelcliente.view.php");

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
        <a href="../view/login/logcliente.view.php">Tentar novamente</a>
        <a href="../">Pagina inicial.</a>
      </div>
<?php };

 ?>
