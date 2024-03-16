<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
            $nome = $_GET["name"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";

            echo "<p id=\"saudacao\">Seja bem-vindo, $nome $sobrenome</p>";
        ?>

        <p><a href="javascript:history.go(-1)" id="voltar">Voltar para a página anterior</a></p>
    </main>
</body>
</html>