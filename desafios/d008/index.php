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
        $num = $_GET['num'] ?? 1;

    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="inum">Número:</label>
            <input type="number" name="num" id="inum" value="<?=$num?>">

            <input type="submit" value="Calcular Raízes">
        </form>


    </main>    
    <?php 
        $raizQuadrada = $num ** (1/2);

        $raizCubica = $num ** (1/3);

    ?>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <p>Analisando o  <strong>número <?=$num;?></strong>, temos</p>
        <ul>
            <li>A sua raiz quadrada é <?php echo "<strong>" . number_format($raizQuadrada,3, ',','.') . "</strong>";?></li>
            <li>A sua raiz cúbica é <?php echo "<strong>". number_format($raizCubica, 3, ',','.') . "</strong>";?></li>

        </ul>



    </section>

</body>
</html>