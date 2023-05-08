<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header><h1>Resultado do cadastro</h1></header>
<main>

    <?php
        $nome = $_GET["nome"] ?? "sem nome";
        $sobreNome = $_GET["sobreNome"] ?? "desconhecido";
    
        echo "Olá, meu nome é <strong>$nome $sobreNome</strong>, e esse é o site que eu estou desenvolvendo no Curso em Video<br><br>";
    ?>
    <div class="center"><a href="javascript:history.go(-1)">Voltar para a pagina de cadastro</a></div>


</main>
</body>
</html>