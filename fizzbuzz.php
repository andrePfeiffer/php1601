<?php

$limite = mt_rand(1, 200);

$saida = $limite . '<br><hr><br>';

for ($numero = 1; $numero <= $limite; $numero++) {
    if ($numero % 3 == 0) {
        $saida .= 'Fizz';
    }
    if ($numero % 5 == 0) {
        $saida .= 'Buzz';
    }
    if ($numero % 5 != 0 && $numero % 3 != 0) {
        $saida .= $numero;
    }
    
    if ($numero == $limite) {
        $saida .= '.';
    }
    else {
        $saida .= ', ';
    }
}

echo $saida;
?>