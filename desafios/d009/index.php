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
    <?php 
        $va1 = $_POST['va1'] ?? 0;
        $peso1 = $_POST['peso1'] ?? 1;

        $va2 = $_POST['va2'] ?? 0;
        $peso2 = $_POST['peso2'] ?? 1;

        
    
    
    ?>

    <main>
        <h1>Médias Artiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <label for="iva1">Valor 1:</label>
            <input type="number" name="va1" id="iva1" step="0.01" value="<?=$va1?>">
        
            <label for="ipeso1">Peso 1:</label>
            <input type="number" name="peso1" id="ipeso1" value="<?=$peso1?>" >

            <label for="iva2">Valor 2:</label>
            <input type="number" name="va2" id="iva2" step="0.01" value="<?=$va2?>" >
        
            <label for="ipeso2">Peso 2:</label>
            <input type="number" name="peso2" id="ipeso2" value="<?=$peso2?>" >

            <input type="submit" value="Calcular Médias">

        </form>


    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?php echo "$va1 e $va2";?>:</p>

        <?php 
            $meSimples = ($va1 + $va2) / 2;
            $mePonde = ($va1 * $peso1 + $va2 * $peso2) / ($peso1 + $peso2);
        
        ?>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valor é igual a <?=number_format($meSimples, 2, ',','.')?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?="$peso1 e $peso2";?> é igual a <?= number_format($mePonde, 2, ',','.')?></li>

        </ul>


    </section>
    
</body>
</html>