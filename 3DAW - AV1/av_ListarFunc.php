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

<h1>Listar Funcionarios </h1><br><br><br>

<?php
$arquivo = "Funcionarios.txt";
$handle = fopen($arquivo, "r");

echo "nome matricula  funcao"."<br>";

while (!feof ($handle)) {
  $nome = fgets($handle, 4096);
  echo $nome  ."<br>";
}

fclose ($handle);
?>

</body>
</html>