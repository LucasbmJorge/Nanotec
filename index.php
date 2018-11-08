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

      <div class="hero">
        <video loop autoplay>
         <source src="images/Internet.mp4" type="video/mp4">
          Your browser does not support the video tag.
          </video>
      </div>

      <nav>
      <a href="#" class="col nanotec">NANOTEC</a>
        <ul>
          <?php if( isset($_SESSION['id'])){
            if($adm) {
            echo "<a href='view/Admin/painelAdm.view.php'><li>PAINEL</li></a>";
            }
            else{
              if ($_SESSION['tipologin'] == 'cliente') {
              echo "<a href='view/Cliente/painelcliente.view.php'><li>PAINEL</li></a>";
              }
              if ($_SESSION['tipologin'] == 'equipe') {
              echo "<a href='view/Equipe/painelequipe.view.php'><li>PAINEL</li></a>";
              }
            }else{
          echo "
          <a href='view/cadescolha.view.php'><li>REGISTRAR</li></a>
          <a href='view/logescolha.view.php'><li>LOGIN</li></a>
          ";
        }?>
        <a href=""><li>SOBRE NÓS</li></a>
        </ul>
      </nav>

    <h1 class="col bem">BEM VINDO A <span>NANOTEC</span></h1>
    <h2 class="col l-12">Somos uma empresa focada em unir demanda e oferta de projetos
                          para garantir que empresas talentosas possam entregar projetos de qualidade
                          a clientes que querem algo pronto rápido.</h2>



    </header>

    <main>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
