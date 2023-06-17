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
            <input type="number" name="nas" id="inas" value="<?=$nas;?>" max="<?=$data?>" required>

            <label for="iano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$data;?></strong>)</label>
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
    <section>
        <h2>Resultado</h2>
        <?php if($ano >= $nas) {

        ?>
            
        <p>Quem nasceu em <?php if($nas != null){echo "$nas";}else echo "$data";?> <?php if($nas ==  $ano) {echo " tem ";} else {echo " vai ter ";}?><strong><?php echo "$idade"; if ($idade == 1 || $idade == 0){echo " ano";}else{echo" anos";}?></strong> <?php if($nas != $ano){echo " em ";}?> <?=$ano;?></p>

        <?php 
        }
        else{

        ?>
        <p><strong>ERRO!</strong></p>
        <p>Verifiqe se o ano em que você nasceu não é maior que o ano em que você deseja saber a sua idade!</p>
        
        <?php 
        }?>
    </section>



</body>
</html>