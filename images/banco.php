<?php
$host="localhost";
$user="root";
$pass="";
$banco="nanotec";
$conexao=mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die(mysqli_error());
?>


<?php
$empresa=$_POST['empresa'];
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];
$sexo=$_POST['sexo'];
$senha=$_POST['senha'];


$sql=mysqli_query($conexao,"INSERT INTO empresa(empresa, nome, endereco, telefone, sexo, senha)VALUES ('$empresa' , '$nome' , '$endereco' , '$telefone' , '$sexo' , '$senha' )");
echo "<center><h1>Cadastro realizado com sucesso</h1></center>";
mysqli_close($conexao);
?>
</body>
</html>