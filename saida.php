<?php

$bem_vindo = print 'Hello World';
echo $bem_vindo;

echo '<br><hr><br>';

echo '<pre>';
$s = 'monkey';
$t = 'many monkeys';
printf("[%s]\n", $s);
printf("[%10s]\n", $s);
printf("[%-10s]\n", $s);
printf("[%010s]\n", $s);
printf("[%'#10s]\n", $s);
printf("[%10.10s]\n", $t);

echo '<br><hr><br>';

$ano = 1976;
$mes = 12;
$dia = 1;
$var = sprintf("%02d-%02d-%04d", $dia, $mes, $ano);
echo $var;
echo '</pre>';
