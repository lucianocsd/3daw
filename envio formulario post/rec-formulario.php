<?php
$name = $_GET["name"];
$email = $_GET["email"];
$telefone = $_GET["telefone"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>envio-formulario</title>

</head>
<body>

    <?php 
    echo  nl2br ("O nome é $name \n ");  //"echo nl2br" dps \n pula linha
    echo nl2br ("O email é $email \n ");
    echo nl2br ("O telefone é $telefone ");
    ?>
   
</body>

</html>