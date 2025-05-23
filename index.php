<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabuada</title>
    </head>
    <body>
        <?php
        echo "<h1> Escreva os números da tabuada do 5 </h1>";
// Algoritmo que imprime a tabuada do 5
 
$numero = 5;
 
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
}
?>
        ?>
    </body>
</html>
