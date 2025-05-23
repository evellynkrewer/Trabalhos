<!DOCTYPE html>
<!--

Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license

Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template

-->
<html>
<meta charset="UTF-8">
<title>Petshop Caxias do Sul 🏙️</title>
<style>

        body {

            font-family: Arial, sans-serif;

            background-color: #f0f4f8;

            padding: 50px;

            color: #ddd;

            display: flex;

    flex-direction: column;

    align-items: center;

        }
 
        h2, h3 {

            color: #DE3163;

        }
 
        form {

            background-color: #DE3163;

            padding: 0px;

            border-radius: 10px;

            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

            max-width: 400px;

            margin-bottom: 30px;

        }
 
        label {

            font-weight: bold;

            display: block;

            margin-top: 10px;

        }
 
        input[type="text"],

        input[type="number"] {

            width: 100%;

            padding: 8px;

            margin-top: 5px;

            border: 1px solid #ccc;

            border-radius: 5px;

        }
 
        input[type="submit"] {

            margin-top: 15px;

            background-color: #ffcbdb;

            color: ff87f4;

            border: none;

            padding: 10px 20px;

            border-radius: 5px;

            font-size: 16px;

            cursor: pointer;

        }
 
        input[type="submit"]:hover {

            background-color: #ff87f4;

        }
 
        .resultado {

            background-color: #000000 ;

            border: 1px solid #000000;

            padding: 15px;

            border-radius: 8px;

            max-width: 500px;

        }
 
        .resultado strong {

            background-color: #000000;

        }
 
        hr {

            margin: 20px 0;

            border: none;

            border-top: 1px solid #ccc;

        }
</style>
</head>
<body>
<h2>Cadastro do Cliente e Pet 🧑 🐶</h2>
 
    <form method="post" action="">
<label>Nome do Cliente 🧑:</label><br>
<input type="text" name="cliente" required><br><br>
 
        <label>Nome do Animal de Estimação 🐾:</label><br>
<input type="text" name="animal" required><br><br>
 
        <label>Valor da Vacina 💉 (R$):</label><br>
<input type="number" step="0.01" name="vacina" required><br><br>
 
        <label>Valor do Alimento 🍽️ (R$):</label><br>
<input type="number" step="0.01" name="alimento" required><br><br>
 
        <input type="submit" value="Registrar e Calcular 💰">
</form>
 
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $cliente = $_POST["cliente"];

        $animal = $_POST["animal"];

        $vacina = (float)$_POST["vacina"];

        $alimento = (float)$_POST["alimento"];

        $total = $vacina + $alimento;
 
        echo "<h3>📊 Dados do Cliente:</h3>";

        echo "🧑 Nome do Cliente: <strong>$cliente</strong><br>";

        echo "🐾 Nome do Animal: <strong>$animal</strong><br>";

        echo "💉 Valor da Vacina: <strong>R$ " . number_format($vacina, 2, ',', '.') . "</strong><br>";

        echo "🍽️ Valor do Alimento: <strong>R$ " . number_format($alimento, 2, ',', '.') . "</strong><br>";

        echo "<hr>";

        echo "💰 <strong>Total a Pagar: R$ " . number_format($total, 2, ',', '.') . "</strong>";

    }

    ?>
</body>
</html>
</body>
</html>

 

 

 
