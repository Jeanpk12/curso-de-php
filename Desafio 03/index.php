<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Real para Dolar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Real para Dolar</h1>
    </header>

    <form method="post">
        <label for="real">Digite o valor em reais:</label>
        <input type="text" name="real" id="real">
        <input type="submit" value="Converter" id="btn">
    </form>

    <div class="resulte">
        <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $real = floatval($_POST["real"]);
                $cotacao = 4.99;
                $dolar = $real / $cotacao;
                $dolar_formatado = number_format($dolar, 2, ",", ".");
                echo "<p class=\"result\">O valor em dólar é: <strong>$$dolar_formatado</strong></p>";
            }
        ?>
    </div>
</body>
</html>