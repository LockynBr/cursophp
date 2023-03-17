<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Convertido</title>
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $real = $_GET["moedas"];
            $dolar = $real / 5.22;
            echo "Seus R$ $real equivalem a <strong>US$</strong>";
            echo "<strong>". round($dolar, 2) ."</strong>";
        ?>
        <p><strong>Cotação fixa de R$5,22</strong> informada diretamente no código.</p>
        <a href="index.html"><input type="button" value="Voltar"></a>
    </section>
</body>
</html>