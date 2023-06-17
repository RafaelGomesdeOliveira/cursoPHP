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
        $segundos = $_GET['segundo'] ?? 0;
    ?>    

    <main>
        <h1>Calculadores de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="isegundo">Qual o total de segundos?</label>
            <input type="number" name="segundo" id="isegundo" value="<?=$segundos?>">

        </form>



    </main>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php 
            echo "<p>Analisando o valor que você digitou, " . number_format($segundos, 3, ",", ".") ." equivalem a um total de " . "variavel aqui" ."</p>";


            $semana = 0;
            $dia = 0;
            $hora = 0;
            $minuto = 0;
            if($segundos <60){
                $segundo = $segundos;

            }
            else if ($segundos > 60){
                $minuto = $segundos / 60;
                $segundo = ($minuto - (integer) $minuto) * 60;
                $minuto = (integer) $minuto;
                echo "$minuto $segundo<br>";
            }
            else if ($segundos > 3600) {
                $hora = $segundo / 3600;
                $minuto = ($hora - (integer) $hora) ;

            }


            echo "<ul>";

                echo "<li>$semana semanas</li>";
                echo "<li>$dia dias</li>";
                echo "<li>$hora horas</li>";
                echo "<li>$minuto minutos</li>";
                echo "<li>$segundo segundos</li>";

            echo "</ul>";




        ?>

    </section>
    
</body>
</html>