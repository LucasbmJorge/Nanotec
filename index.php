<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];

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
      <a href="/"><h1 class="col l-4">NANOTEC</h1></a>
        <ul class="col l-8">
          <?php if( isset($_SESSION['id'])){
            if($adm) {
              echo "<a href='view/painelAdm.view.php'><li class='col l-4'></i>PAINEL</li></a>";
            }
            else{
            echo "<a href='view/painelcliente.view.php'><li class='col l-4'></i>PAINEL</li></a>";
          }
        }?>


          <a href="view/cadescolha.view.php"><li class="col l-4"></i> REGISTRAR</li></a>
          <a href="view/logescolha.view.php"><li class="col l-4"></i> LOGIN</li></a>
          <a href=""><li class="col l-4"></i> SOBRE NÓS</li></a>
        </ul>
      </nav>

    <h1 class="col bem">BEM VINDO A <span class="gree">NANOTEC</span></h1>
    <h2 class="col l-12">Somos uma empresa focada em unir demanda e oferta de projetos
                          para garantir que empresas talentosas possam entregar projetos de qualidade
                          a clientes que querem algo pronto rápido.</h2>



    </header>

    <main>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
