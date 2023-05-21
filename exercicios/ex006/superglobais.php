<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("data-da-semnada", "SEGUNDA", time() + 3600);

                session_start();

                $_SESSION['teste'] = "FUNCIONOU";


                //RECEBE APENAS O DE GET E ENVIA PELA URL
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                // RECEBE APENAS O POSTO E NÃO ENVIAR PELO CABEÇALHO
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                //RECEBE OS ATRIBUTOS DE GET E DE POST E ENVIA PELO CABEÇALHO E URL
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);
                
                //SERVE PARA EU PODER UTILIZAR O SESSION teste EM TODAS AS PASTAS PRÓXIMAS
                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                
                echo "<h1>Superglobal UTILIZANDO O FOREACH</h1>";
                foreach (getenv() as $c => $k){
                    echo "<br> $c - $k";
                }

                echo "<h1>Super global SERVER</h1>";
                var_dump($_SERVER);


                echo "<h1>Super global GLOBALS</h1>";
                var_dump($GLOBALS);





            ?>



        </pre>
    </main>    

</body>
</html>