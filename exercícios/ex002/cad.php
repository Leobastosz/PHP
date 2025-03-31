<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

    <h1>Resultado de processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_REQUEST ["nome"];
        $snome = $_GET["snome"];

        echo "<p> Boa noite, $nome $snome! Como você está?</p>"
            
        
        ?>
    </main>
</body>
</html>