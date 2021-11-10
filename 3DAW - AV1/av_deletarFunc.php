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



<?php

    //não consegui terminar essee fazer funcionar.
    $arq = 'Funcionarios.txt'; 
    $search = '111';  
    $found = array();
    $arr = array();
    
    foreach ($arq as $file) {

        $arr = file($file);
        foreach ($arr as $k => $v) {
                if (stripos($v, $search) !== false) {
                $found[] = trim($arr[$k]);
                unset($arr[$k]);
            }
        }

    unset($found, $arr);
?>

</body>
</html>

