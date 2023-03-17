<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador</title>
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $aleat = rand(0, 100);
            echo "O valor gerado foi $aleat";
        ?>
        <p><a href="index.php"><input type="button" value="Gerar outro" name="botao"></a></p>
    </section>
</body>
</html>