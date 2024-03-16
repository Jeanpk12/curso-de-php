<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formulario">
        <header>
            <h1>Gerador de Números Aleatórios</h1>
        </header>

        <main>
            <p>Gerando um número entre 0 e 1000</p>
            <?php
            function gerarNumeroAleatorio($min, $max) {
                return mt_rand($min, $max);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['gerar_numero'])) {
                $min = 0;
                $max = 1000;
                $randomizar = gerarNumeroAleatorio($min, $max);
                echo "<p>O número gerado é <strong>$randomizar</strong></p>";
            }
            ?>
            <form method="post">
                <input type="submit" name="gerar_numero" value="Gerar Número" id="btn">
            </form>
        </main>
    </div>
</body>
</html>
