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
<a href="av_ExcluirFunc.php">Excluir Funcionario</a><br><br>

<h1>Alterar Funcionario</h1>
<?php

?>
<form action="av_alterar.php" method="GET">
    Matricula do Funcionario:   <input type="text" name="matricula"><br>
    <input type="submit" value="enviar">
</form>

</body>
</html>