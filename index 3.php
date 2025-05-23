<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Venda Limpa Tênis</title>
    </head>
    <body>
        <form method="post">
<h1> Vendas </h1>
        <label for =" fname"> Código:</label><br>
<input type=" text" id="codigo" name="codigo" value=""><br>
<label for =" fname"> Nome:</label><br>
<input type=" text" id="nome" name="nome" value=""><br>
<label for =" fqtde"> Quantidade:</label><br>
<input type=" text" id="qtde" name="qtde" value="0"><br>
<label for =" fvalor"> Valor:</label><br>
<input type=" text" id="valor" name="valor" value="0.00"><br>
<input type="submit" value="Calcular">
</form>
        <?php
        //Variáveis
        if ($_SERVER ["REQUEST_METHOD"] == "POST"){
        $codigo = $_POST ["codigo"];
        $nome = $_POST ["nome"];
        $qtde = $_POST ["qtde"];
        $valor = $_POST ["valor"];
        echo "<h1>PDV</h1>";
        //Cálculo
        $vlrtotal = $valor * $qtde;
        //Escreva na tela
        echo "O produto $nome custa $valor <br>";
        echo "Valor Total é igual a $vlrtotal";
        }
        ?>
        
    </body>
</html>