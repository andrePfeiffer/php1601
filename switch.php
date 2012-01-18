<?php

$var = 2;

switch ($var){
    case 1:
        echo 'A variavel tem o valor de 1';
        break;
    case 2:
        echo 'A variavel tem o valor de 2';
        break;
    case 3:
        echo 'A variavel tem o valor de 3';
        break;
    case 4:
        echo 'A variavel tem o valor de 4';
        break;
    default:
        echo 'A variavel tem o valor diferente de 1, 2, 3 e 4';
}

if($var == 1){
    echo 'A variavel tem o valor de 1';
}elseif($var == 2){
    echo 'A variavel tem o valor de 2';
}elseif($var == 3){
    echo 'A variavel tem o valor de 3';
}elseif($var == 4){
    echo 'A variavel tem o valor de 4';
}else{
    echo 'A variavel tem o valor diferente de 1, 2, 3 e 4';
}

