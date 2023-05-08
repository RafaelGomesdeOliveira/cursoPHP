<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <h1>Conversor de moeda v1.0</h1>
        <?php 
            $din = $_GET['din'];
            $dolar = $din * 5.00;
            echo "Seus R$ $din equivalem a <strong> US$ $dolar</strong><br><br>";

            echo "<strong>Cotação fica de R$5,00</strong>, informada diretamente no código";

        ?>  


    </main>

    
</body>
</html>