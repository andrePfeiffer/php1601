<?php
header('Content-Type: text/html; charset=utf-8');

$var1 = 1;
$var2 = 10;
$var3 = 1;
if ($var1 == $var2) {
    echo '$var1 é igual a $var2';
} elseif ($var1 == $var3) {
    echo '$var1 é igual a $var3';
} else {
    echo '$var1 não é igual a $var2 ou a $var3';
}

echo '<br><hr><br>';

if ($var1 == $var2) echo '$var1 é igual a $var2';

echo '<br><hr><br>';

if ($var1 == $var2):
    echo '$var1 é igual a $var2';
elseif ($var1 == $var3):
    echo '$var1 é igual a $var3';
else:
    echo '$var1 não é igual a $var2 ou a $var3';
endif;

if ($var1 == $var2):
    echo '$var1 é igual a $var2';
endif;

echo '<br><hr><br>';

$acesso = 1;
echo 'usuário ';
echo ($acesso > 0) ? 'registrado' : 'não registrado';
if($acesso > 0){ echo 'registrado'; }else{ echo 'não registrado'; }

