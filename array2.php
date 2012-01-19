<?php

$a = array(10, 20, 30, 40, 'a50' => 'cinquenta', 60, 70, 80 => 'oitenta', 'ola mundo');
$a[] = 'luiza esta no canada';
$a[] = 'luiza voltou para o brasil';
unset($a[80]);
$a = array_reverse($a);
//$a = array_flip($a);

echo count($a);

echo '<pre>';
print_r($a);
echo '</pre>';

list($primeiro, $segundo) = $a;
echo $primeiro . '<br>' . $segundo;

echo '<br><hr><br>';

reset($a);
while (key($a) !== null) {
    echo key($a) .": " .current($a) . "<br />";
    next($a);
}