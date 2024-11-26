<?php

//sem concatenação
    echo "Sem concatenação:<br>";
    $var = "Bill Gates";
    $tipo = gettype($var);
    echo "$var ($tipo)<br>";
    $var = 12;
    $tipo = gettype($var);
    echo "$var ($tipo)<br>";
    $var = 3.1415;
    $tipo = gettype($var);
    echo "$var ($tipo)<br>";
    $var = true;
    $tipo = gettype($var);
    echo "$var ($tipo)<br><br>";

//com concatenação (aqui os itens a serem imprimidos serão unidos por pontos)
    echo "Com concatenação:<br>";
    $var = "Bill Gates";
    $tipo = gettype($var);
    echo "$var " . $tipo . "<br>";
    $var = 12;
    $tipo = gettype($var);
    echo "$var " . $tipo . "<br>";
    $var = 3.1415;
    $tipo = gettype($var);
    echo "$var " . $tipo . "<br>";
    $var = true;
    $tipo = gettype($var);
    echo "$var " . $tipo . "<br><br>";


?>

<?php
//com concatenação (aqui os itens a serem imprimidos serão unidos por pontos)
    $var = null;
    if(is_null($var)) {
        echo "Variável " . "$var " . "é nula/vazia!" . "<br>";
    }

    $var = "Bill Gates";
    if(is_string($var)) {   //esta barra junto com a variavel impede que ela seja imprimida pelo echo
        echo "Variável " . "\$var " . "é uma variável do tipo string!" . "<br>";
    }

    $var = 12;
    if(is_integer($var)) {
        echo "Variável " . "$var " . "é uma variável do tipo integer!" . "<br>";
    }

    $var = 3.1415;
    if(is_double($var)) {
        echo "Variável " . "$var " . "é uma variável do tipo double!" . "<br>";
    }
    
    $var = 3.1415;
    if(is_float($var)) {
        echo "Variável " . "$var " . "é uma variável do tipo float!" . "<br><br>";
    }

//Array com definição direta (sem chave)

    $nota[0] = 3; $nota[1] = 4; $nota[2] = 3; $nota[4] = 5;
    echo "Posição 0: " . "$nota[0]". "<br>"; 
    echo "Posição 1: " . "$nota[1]". "<br>";
    echo "Posição 2: " . "$nota[2]". "<br>";
    echo "Posição 3: " . "$nota[3]". "<br>";
    echo "Posição 4: " . "$nota[4]". "<br>"; 
    echo "Posição 5: " . "$nota[5]". "<br>";
    echo "Posição 6: " . "$nota[6]". "<br>";
    echo "Posição 7: " . "$nota[7]". "<br>";

    var_dump($nota)
?>
