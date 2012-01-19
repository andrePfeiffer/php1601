<?php

header('Content-Type: text/html; charset=utf-8');

function negrito($texto = 'Hello World', $quebra = null) {
    global $final;
    $final = '<strong>' . $texto . '</strong>';
    $final .= $quebra;
    return $final;
}

echo negrito('testando', '<br />');
echo negrito();

echo '<br><hr><br>';

function negrito2($textoLocal) {
    global $texto;
    $final = '<strong>' . $texto . ' - ' . $textoLocal . '</strong>';
    return $final;
}

$texto = 'testando';
echo negrito2('oi');

echo '<br><hr><br>';

function foo() {
    $numargs = func_num_args();
    echo "Número de argumentos: $numargs<br>";
    if ($numargs >= 2) {
        echo "O segundo argumento é: " . func_get_arg(1) . "<br>";
    }
    $arg_list = func_get_args();
    foreach ($arg_list as $arg => $valor) {
        echo "Argumento $arg é: " . $valor . "<br>";
    }
}

foo(1, 2, 3, 'hello world');