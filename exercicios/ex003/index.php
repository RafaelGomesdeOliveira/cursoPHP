<?php 
    //0x é hexadecima 0b é binário e 0 é octal

    $numero = 0x1A;
    echo "O número da variável é $numero<br>";

    $numero = 3e2; //  3 x 10 elevado ao quadrado (2)
    
    $numero = (integer) 45.5; //Coerção
    $v = false;
    echo "O valor para v é <strong>$v</strong>" . "<br>";
    var_dump($numero);

    echo "Aqui";

    $nome = "Rafael";
    $sobrenome = "Gomes de Oliveira \u{1F634}" . "<br>";

    echo "<br>Com interpretação <strong> (aspas duplas)</strong>";
    echo "<br>Olá, $nome $sobrenome";


    $nome = "Rafael";
    echo "<br>Sem interpretação <strong>(aspas simples)</strong> <br>";
    $sobrenome = 'Gomes de Oliveira \u{1F634}';

    echo "Olá, $nome $sobrenome";

    date_default_timezone_set('America/Sao_Paulo');
    echo "<br>" . date('G:i:s');
    echo "<br>A data de hoje é " . date('d/m/Y');

    $nome = "Rodrigo";
    $sobrenome = "Nogueira";

    echo "<br>$nome " . '"Minotauro" ' . "$sobrenome";
    echo "<br>$nome \"Minotaruo\" $sobrenome";

    $nome = "Rafael";
    $sobre = "Gomes";
    $apelido = "Fuboca";


    echo "<br>$nome \n \"$apelido\" \n $sobre";

    $curso = "PHP";
    $ano = date('Y');



    echo <<< TESTE
        Estou estudando! 
        $curso no ano de $ano
    TESTE;



    
?>
