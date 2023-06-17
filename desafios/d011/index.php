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
        $padrao = numfmt_create("pr_BR", NumberFormatter::CURRENCY);

        $porcentagem = $_GET['por'] ?? 0;
        $preco = $_GET['preco'] ?? 1;
    ?>  

    <main>
        <h1>Reajustador de Preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ipreco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="ipreco" value="<?=$preco?>" step="0.001" min="1" required>

            <label for="ipor">Qual será o percentual de reajuste? <?=$porcentagem ?>(%)</label>
            <input type="range" name="por" id="ipor" min="0" max="100" value="<?=$porcentagem?>" required>

            <input type="submit" value="Reajustar">
        
        </form>


    </main>
    
    <?php 
        if($preco != 0){

        
    ?>
    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php 
    
            $valorPago = $preco + ($preco * ($porcentagem/100));
            if ($valorPago != null || $valorPago != 0){
            }
            echo "<p>O produto que custava ". numfmt_format_currency($padrao, $preco, 'BRL') ." com <strong>".$porcentagem."% de aumento</strong>"; 
            
            if($porcentagem == 0) {
                echo " vai continuar custando " . numfmt_format_currency($padrao, $valorPago, 'BRL') . "</p>";
            } else { 
                echo " vai passar a custar ". numfmt_format_currency($padrao, $valorPago, 'BRL')." a partir de agora.</p>";
            }
            
        ?>


    </section>

    <?php 
    }
    else {
        echo "ERRO, verifique o preço digitado";

    }
    ?>
</body>
</html>