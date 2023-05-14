<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com númeors aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100<br></p>
        <?php

        //Não é bom utilizar o rand por que ele é velho
        // $geradorDeNumeroAleatorio = rand(0,100);

        //Ambos utilzam a mesma lógica, o rando e o mt_rand
        $geradorDeNumeroAleatorio = mt_rand(0,100);

        // Para gerar números criptografados 
        //$geradorDeNumeroAleatorio = random_int(0,100);


        echo "$geradorDeNumeroAleatorio";

    

        // function recarregar (){
        //     for ($num = 0; $num < 1; $num++) {
        //     header("Refresh: 0");
        //     }
        //     $num = 0;
        // }


        ?>

    <button onclick="javascript:document.location.reload()">Gerar outro</button>

    </main>
</body>
</html>