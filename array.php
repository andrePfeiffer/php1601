<?php

//$cor = array('vermelho', 'verde', 'azul');
$cor[0] = 'vermelho';
$cor[1] = 'verde';
$cor[2] = 'azul';
echo $cor[1];

echo '<br><hr><br>';

//$a = array('a' => 10, 'b' => 20, 'c' => 30);
$a['a'] = 10;
$a['b'] = 20;
$a['c'] = 30;
echo $a['a'];

echo '<br><hr><br>';

echo gettype($_GET);

echo '<br><hr><br>';

foreach ($cor as $valor) {
    echo 'cor: ' . $valor . '<br>';
}

foreach ($cor as $chave => $valor) {
    echo 'a cor ' . $chave . ' tem o valor: ' . $valor . '<br>';
}

echo '<br><hr><br>';

echo '<pre>';
print_r($cor);
echo '<br>';
var_dump($cor);
echo '</pre>';
