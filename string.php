<?php

$email = 'andre.pfeiffer@gmail.com';

if(
        substr_count($email, '@') == 1 &&  // testa a quantidade do @
        strpos($email, '@') > 0 &&  // testa a posição do @
        strrpos($email, '.') > strpos($email, '@')+1 &&  // verifica se o último ponto é depois da @
        strrpos($email, '.') < strlen($email)-1 // verifica se o último ponto não é o último caracter
){
    echo 'o email eh valido';
}else{
    echo 'o email nao eh valido';
}