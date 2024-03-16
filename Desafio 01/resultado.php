<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>

    <main>
        <?php 
            $numero_escolhido = $_GET["numero"];
            $numero_antecessor = $numero_escolhido - 1;
            $numero_sucessor = $numero_escolhido + 1;

            echo "<p class=\"resposta\">O número escolhido foi $numero_escolhido</p> <br/>";
            echo "<p class=\"resposta\">O número antecessor é $numero_antecessor</p> <br/>";
            echo "<p class=\"resposta\">O número sucessor é $numero_sucessor</p> <br/><br/>"
        ?>
        <p id="voltar"><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>