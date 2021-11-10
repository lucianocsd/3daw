<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema Corporativo de Funcionarios</title>
</head>
<body>
<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["func"];
    $matricula = $_POST["matricula"];
    $funcao = $_POST["funcao"];
    $nomeArquivo = "Funcionarios.txt";

    $txtC = "$nome;$matricula;$funcao\n"; 
    if (file_exists($nomeArquivo)){
        echo "Arquivo $nomeArquivo existe \n";
    } else {
        echo "Arquivo $nomeArquivo não existe \n";
        file_put_contents("Funcionarios.txt", $txtC);
    }

    $txt = "$nome;$matricula;$funcao\n";
    
    file_put_contents("Funcionarios.txt", $txt , FILE_APPEND);
   
} else {
    $ehPost = false;
}
?>
<a href="av_cadastroFunc.php">Inserir Funcionario</a><br>
<a href="av_alterarFunc.php">Alterar Funcionario</a><br>
<a href="av_ListarFunc.php">Listar Funcionario</a><br>
<a href="av_ExcluirFunc.php">Excluir Funcionario</a><br><br>

<h1>Inserir Funcionario</h1>

<h3><?php if ($ehPost) {echo "Aluno $nome inserido com sucesso";} ?></h3>

<form action="av_cadastroFunc.php" method="POST">
    nome:   <input type="text" name="func"><br>
    matricula:   <input type="text" name="matricula"><br>
    funcao:   <input type="text" name="funcao"><br>
    <input type="submit" value="enviar">
</form>
</body>
</html>