<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal/ 0b = binário/ 0 = Octal
        // $num = 010;
        // echo "O valor da variável é $num";

        // $v = "Paulo Henrique";
        // var_dump($v);

        // $num = (int) 3e2; // 3 x 10^2 coerção
        // // echo "O valor é $num";
        // var_dump($num);

        // $num = (double) "950";
        // var_dump($num);

        // $casado = true; 
        // //var_dump($casado);  
        // print "O valor para casado é $casado"; // Para bool o valor false = vazio / true = 1

        // $vet = [6, 2.5, "Maria", false, 5];
        // var_dump($vet)

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>