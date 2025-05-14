<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Desafio</title>
</head>
<body>
<?php
echo "<h1>Pizzaria da Mamma</h1>";
$name = "Jandair";
$fone = "54 99963943";
$endereco = "Rua Chocolate";
$sabor = "Calabresa";
$tamanho = "G";
$bebida = "Coca-Cola Zero";
$precopizza = 45.00;
$taxaentrega = 15.00;
$precobebida = 5.99;
 
echo "<h2>Detalhes do seu pedido</h2>";
echo "<br>";
echo "<p> Nome do cliente: $name </p>";
echo "<br>";
echo "<p> Telefone: $fone </p>";
echo "<br>";
echo "<p> Endereço: $endereco </p>";
echo "<br>";
echo "<p> Tamanho: $tamanho </p>";
echo "<br>";
echo "<p> Bebida: $bebida </p>";
echo "<br>";
$total = $precopizza + $taxaentrega + $precobebida;
echo "<p> Valor Total: R$ $total </p>";
 
?>
</body>
</html>