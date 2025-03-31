<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerando números aleatórios</title>
</head>
<body>

    <h1>Gerando números aleatórios entre 0 e 100:</h1>

    <?php
        $num = random_int(0,100);
        $num2 = random_int(0,100);
        echo "Os números gerados foram $num e $num2";
    
    ?>


</body>
</html>