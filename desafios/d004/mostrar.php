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
            $incio = date('m-d-Y', strtotime("-7 days"));
            $fim = date('m-d-Y');
            
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$incio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            $cotacao = $dados["value"][0]["cotacaoCompra"];
        
            $din = $_GET['din'];
            $dolar = $din / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            // echo "Seus R\$". number_format($din, 2, "," , "."). " equivalem a <strong>  US\$". number_format($dolar, 2, "," , ".") ."</strong><br><br>";


            //Segunda forma utilizando o format_currency, A MELHOR MANEIRA DE FAZER
            echo "Seus " . numfmt_format_currency($padrao, $din, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong><br>";

            // Coloquei o USD para apenas, colocar o US$ atrás dos números


            echo "<strong>Cotação fixa de R$5,00</strong>, informada diretamente no código";
            //date_default_timezone_set("America/Sao_Paulo");
        ?>  
        
        <button onclick="javascript:window.location.href='index.php'">&#x2b05; Voltar</button>
    </main>

    
</body>
</html>