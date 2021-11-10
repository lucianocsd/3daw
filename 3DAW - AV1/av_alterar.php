<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema Corporativo de Funcionarios</title>
</head>
<body>
<a href="av_cadastroFunc.php">Inserir Funcionario</a><br>
<a href="av_alterarFunc.php">Alterar Funcionario</a><br>
<a href="av_ListarFunc.php">Listar Funcionario</a><br>
<a href="av_ExcluirFunc.php">Excluir Funcionario</a><br><br

<h1>Alterar Funcionario</h1>
<?php

$matricula = "0";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["func"];
    $matricula = $_POST["matricula"];
    $funcao = $_POST["funcao"];
  

}else {
    $matricula = $_GET["matricula"];
}
$matricula = $_GET["matricula"];
?>
<form action="av_alterar.php" method="POST">

    matricula:<input type="txt" name="matricula" value = "111"> <br> 
    nome:<input type="text" name="nome" value=""><br>
    funcao:<input type="text" name="funcao" value=""><br>

    <input type="submit" value="Alterar">
</form>

</body>
</html>