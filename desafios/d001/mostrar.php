<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $num = $_GET['num'];
            echo "<p>O seu número escolhido foi <strong>$num </strong><br></p>";

            $numA = $_GET['num'] - 1;   
            echo "<p>O seu <strong>antecessor</strong> é $numA<br></p>";

            $numS = $_GET['num'] + 1;
            echo "<p>O seu <strong>sucessor</strong> é $numS</p>";

            echo "<strong>Outra forma de resolver, veja o código</strong> <br>";
            echo "<p>O númeor digitado foi: <strong>$num</strong><br></p>";
            echo "<p>O antecessor é " . ($num -1) . "<br></p>";
            echo "<p>O seu sucessor é" . ($num + 1) . "<br></p>";
        ?>
        
        <button onclick="javascript:window.location.href='index.php'">&#x2b05; Voltar</button>

    <!-- <div><a class="voltarMod" href="javascript:history.go(-1)">Voltar</a></div> -->



    </main>
    
</body>
</html>