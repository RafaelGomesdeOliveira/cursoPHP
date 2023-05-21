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
    <h1>Analisador de Número Real</h1>
    <?php 
            $num = $_GET['num'] ?? 0;

            //SE NÃO ELE RECEBE 0

            echo "Analisando o núemro <strong>" . number_format($num, 3, ',', '.'). "</strong> informado pelo usuario<br>";
            
            $int = (int) $num;
            $fra = $num - $int; 
            echo "<ul><li>A parte fracionaria é: <strong>".number_format($fra, 3, ',','.')."</strong></li>";
            echo "<li>A parte inteira é: <strong>".number_format($int, 0, ',', '.')."</strong></li></ul>";
        
        ?>

    <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>    


</body>
</html>