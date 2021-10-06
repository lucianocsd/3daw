<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW segunda aula</h1>
<?php
$nome1 = "Brenda";
$nome2 = "Bruno";
$nome3 = "Diego";
$nome4 = "Eduardo";
$nome5 = "Elias";

$nomes = array("Brenda","Bruno","Diego","Eduardo","Elias"); //botando as variaveis acima em arreio/vetor;

$idade1 = 23;
$idade2 = 24;
$idade3 = 25;
$idade4 = 29;
$idade5 = 30;

$idades = array(23,24,25,29,30); //"vetor"

$media1 = 7.5;
$media2 = 7.5;
$media3 = 7.5;
$media4 = 7.5;
$media5 = 7.5;

$medias = array(7.6 , 7.9 , 8.1 , 9.0 , 10); //"vetor"

echo "tipo de dado de nome1" . var_dump($nome1);
echo "<br>";
    echo "tipo de dado de nome2" . var_dump($nome2);
    echo "<br>";
    echo "tipo de dado de idade" . var_dump($idade1);
    echo "<br>";
    echo "tipo de dado de media" . var_dump($media1);
    echo "<br>";
$nome6 = $_GET["nome6"]; //usar metodo get para enviar dados direto na url (depois da ? no link)
    echo "nome vindo da url: $nome6";
    echo "<br>";
?>
<br/>
<table style="border:1px solid black" >
    <tr>
        <td>nome</td>
        <td>idade</td>
        <td>media</td>
    </tr>
    <tr>
        <?php
        echo "<td> $nome1 </td>";
        echo "<td> $idade1 </td>";
        echo "<td> $media1 </td>";
        ?>
    </tr>

    <tr>
        <?php
        echo "<td> $nomes[3] </td>";
        echo "<td> $idades[3] </td>";
        echo "<td> $medias[3] </td>";
        ?>
    </tr>
</table>

<br/><br/> <!-- 2 pulo de linha (forma de comentar no corpo html)-->

<table style="border:1px solid blue" >
    <?php
     echo "fazendo por meio de for (forma de comentar php)";
    
        for ($x = 0; $x <=4 ; $x++)
        {
            echo "<tr>";

                echo "<td> $nomes[$x] </td>";
                echo "<td> $idades[$x] </td>";
                echo "<td> $medias[$x] </td>";      

            echo "</tr>";   
        }
    ?>

<table style="border:1px solid blue" >
    <?php   
        echo "Testando com continue..achou diego pula e vai em diante no vetor";
       $x = 0;
            while($x <= 4 ){

               if ($nomes[$x] == "Diego"){
                    $x++;
                    continue;  //continue nao segue o codigo abaixo do while..volta pro inicio dele
                }
                    
                echo "<tr>";
                echo "<td> $nomes[$x] </td>";
                echo "<td> $idades[$x] </td>";
                echo "<td> $medias[$x] </td>";
                $x++;
            }
    ?>
</table>

<table style="border:1px solid blue" >
    <?php   
        //agora com break
        $x = 0;
        echo "Testando o break...tem que parar no Bruno, diego em diante ele para";
            while($x <= 4 ){

               if ($nomes[$x] == "Diego"){
                    $x++;
                    break;  //pára de percorrer o vetor ao achar diego
                }
                    
                echo "<tr>";
                echo "<td> $nomes[$x] </td>";
                echo "<td> $idades[$x] </td>";
                echo "<td> $medias[$x] </td>";
                $x++;
            }
    ?>
</table>

<?php
        //restando foreach, um outro modo de "for". Percorre todo um arreio até o fim dele
        
        echo "Nomes: ";//comentario


        foreach ($nomes as $nome){
        echo "<tr>";
        echo "<td> $nome </td>";
        echo "</tr>";
    }
    ?>

<br>


<?php 
    echo  nl2br ("Aula 29-09: O nome é $nomes[1] \n ");  //"echo nl2br" dps \n pula linha

    ?>

 

</table> 
</body>
</html>