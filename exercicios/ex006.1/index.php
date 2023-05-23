<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórmularios Retroalimentados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    
    ?>

    <main>
        <h1>Fórmularios Retroalimentados</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
            <label for="inum1">Número 1:</label>
            <input type="number" name="num1" id="inum1" value="<?=$num1?>">

            <label for="inum2">Número 2:</label>
            <input type="number" name="num2" id="inum2" value="<?=$num2?>">

            <input type="submit" value="Enviar">


        </form>
    </main>    
    <section id="resultado">
        <h2>Resultado da soma</h2>
    
        <?php
            $soma = $num1 + $num2;
            print "A soma entre os números $num1 e $num2 é de: <strong>$soma</strong>";
        ?>
    </section>



</body>
</html>