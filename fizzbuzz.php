<?php
@include_once 'cronometro.php';

function fizzBuzz ($numero)
{
    if ($numero % 3 == 0) 
    {
        $retorno = 'Fizz';
    }
    if ($numero % 5 == 0) 
    {
        $retorno = 'Buzz';
    }
    if ($numero % 5 != 0 && $numero % 3 != 0) 
    {
        $retorno = $numero;
    }
    return $retorno;
}

$limite = mt_rand(1, 200);

$saida = $limite . '<br><hr><br>';

for ($i = 1; $i <= $limite; $i++) 
{
    $saida .= fizzBuzz($i);

    if ($i == $limite) {
        $saida .= '.';
    } 
    else 
    {
        $saida .= ', ';
    }
}

echo $saida;
