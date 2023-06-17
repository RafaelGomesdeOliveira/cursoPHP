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
        $salarioMin = 1380.60;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salario = $_GET['salario'] ?? 0;   


    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="isalario">Salário:</label>
            <input type="number" name="salario" id="isalario" step="0.01" value="<?=$salario?>" >

            <p>Considerando o salário minímo de <?php echo "<strong>" . numfmt_format_currency($padrao, $salarioMin, 'BRL') . "</strong>";?></p>

            <input type="submit" value="Calcular">
        </form>


    </main>    
    <section id="resultado">
        <h2>Resultado Final</h2> 

        <?php 


            $quantSal = $salario /$salarioMin;
            $extra = ($quantSal - (int) $quantSal) * $salarioMin;
            $quantSal = (int) $quantSal;

            echo "Quem recebe um salário de". numfmt_format_currency($padrao, $salario, 'BRL'). " ganha <strong>$quantSal salários minímos + " . numfmt_format_currency($padrao, $extra, 'BRL' . "</strong>");

            
            

        ?>

    </section>
    

</body>
</html>