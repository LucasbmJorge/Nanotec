<?php
 session_start();

 if(isset($_SESSION['id'])){
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];
}

 ?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/remove-colors.css">
  </head>

  <body>

    <header>

      <nav>
      <a href="#" class="col nanotec">NANOTEC</a>
        <ul>
          <?php if( isset($_SESSION['id'])){
            if($adm) {
            echo "<a href='view/Admin/painelAdm.view.php'><li>PAINEL</li></a>";
            }
            else if ($_SESSION['tipologin'] == 'cliente') {
              echo "<a href='view/Cliente/painelcliente.view.php'><li>PAINEL</li></a>";
              }
            else if ($_SESSION['tipologin'] == 'equipe') {
              echo "<a href='view/Equipe/painelequipe.view.php'><li>PAINEL</li></a>";
              }
            }else{
          echo "
          <a href='view/Cadastro/cadescolha.view.php'><li>REGISTRAR</li></a>
          <a href='view/Login/logescolha.view.php'><li>LOGIN</li></a>
          ";
        }?>
        <a href="" class="onthis"><li>SOBRE NÓS</li></a>
        </ul>
      </nav>
    </header>

    <main id="sobre">
      <section class="sobre">
        <h2>Sobre nós</h2>
      </section>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
