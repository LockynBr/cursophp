<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resposta</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $num = $_GET["numero"] ?? 0;
            echo "O número escolhido foi $num <br/>"; 
            echo "O seu antecessor é ". $num - 1 ." <br/>"; 
            echo "O seu sucessor é ". $num + 1 ."<br/>" ;
        ?>
        <p><a href="index.html"><input type="button" value="Voltar"></a></p>
    </main>
</body>
</html>