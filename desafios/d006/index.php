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
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;

    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="idividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="idividendo" min="0" value="<?=$dividendo;?>" step="0.001" >
            
            <label for="idivisor">Divisor:</label>
            <input type="number" name="divisor" id="idivisor" min="1" value="<?=$divisor;?>" step="0.001">

            <input type="submit" value="Calcular">

        </form>

    </main>    

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $resto = $dividendo % $divisor;

            $numeroInt = $dividendo / $divisor;

            $numeroInt = (int) $numeroInt;

        
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$numeroInt?></td>
            </tr>
        </table>


    </section>

</body>
</html>