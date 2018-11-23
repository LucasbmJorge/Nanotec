<?php
 session_start();

 include '../../includes/head.php';
 ?>

  <body id="green">

    <header>
      <?php include "cadnav.php"; ?>
    </header>

    <main>
      <form class="equipe" action="../../app/cadequipetemp.app.php" method="post">
        <h1>Cadastro de equipe:</h1>
      <div class="col l-8">
        <input type="text" name="nomee"  autocomplete="off" placeholder="Nome da equipe" required>
        <input type="text" name="cnpje" class="cnpj" autocomplete="off" placeholder="CNPJ" required>
        <input type="text" name="integrantese"  autocomplete="off" placeholder="Numero de integrantes" required>
        <input type="text" name="enderecoe"  autocomplete="off" placeholder="Endereço" required>
        <input type="text" name="telefonee" class="tel" autocomplete="off" placeholder="Telefone" required>
        <input type="email" name="emaile"  autocomplete="off" placeholder="E-mail" required>
        <input type="text" name="senhae"  autocomplete="off" placeholder="Senha" required>
      </div>

    <div class="col l-7 especial">
      <label> <h3> Especialização: </h3> </label> <br>
      <input type="checkbox" class="check" name="bancodedados" value="1"><p> Criação de banco de dados </p> <br>
      <input type="checkbox" class="check" name="redesadm" value="1"><p> Criação de Redes Administrativas </p> <br>
      <input type="checkbox" class="check" name="analisesistemas" value="1"><p> Análise de Sistemas </p> <br>
      <input type="checkbox" class="check" name="desenvolvimentosistemas" value="1"><p> Desenvolvimento de Sistemas </p> <br>
      <input type="checkbox" class="check" name="montagemmanutencao" value="1"><p> Montagem e manutenção de computadores </p> <br>
      <input type="checkbox" class="check" name="criacaosites" value="1"><p> Criação de sites </p> <br>
    </div>
        <br>
        <button type="submit" name="button">Cadastrar-se</button>
      </form>
    </main>

<script type="text/javascript" src="../../JS/main.js"></script>
  </body>

  </html>
