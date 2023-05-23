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
        $data = date('Y');
        $nas = $_GET['nas'] ?? null;
        $ano = $_GET['ano'] ?? date('Y');

    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="inasc">Em que você nasceu?</label>
            <input type="number" name="nas" id="inas" value="<?=$nas;?>" required>

            <label for="iano">Quer saber sua iddade em que ano? (atualmente estamos em <strong><?=$ano;?></strong>)</label>
            <input type="number" name="ano" id="iano" value="<?=$ano;?>" required >

            <input type="submit" value="Qual será a minha idade?">
        </form>

    </main>
    <?php 
        $idade = 0;
        if ($nas != null){
        $idade = $ano - $nas;
    }
    ?>
    <section id="resultado">
        <h2>Resultado</h2>
        <p>Quem nasceu em <?php if($nas != null){echo "$nas";}else echo "$data";?> vai ter <strong><?="$idade anos"?></strong> em <?=$ano;?></p>



    </section>



</body>
</html>