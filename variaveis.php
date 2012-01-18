<?php
header('Content-Type: text/html; charset=utf-8');

$var = 'andre10';

$var = (int)$var;

echo gettype($var);
echo '<br>';
echo $var;

echo '<br><hr><br>';

$nome = 'andre';
$email = 'andre@pfeiffer.com.br';
$var = "<a href=\"mailto:$email\">$nome</a>";
$var = '<a href="mailto:' . $email . '">' . $nome . '</a>';
echo $var;

echo '<br><hr><br>';

$nome = 'Íparos';
$var = <<< QQC
Exemplo de variável definida pela sintaxe heredoc<br />
É possível expandir variáveis: $nome;
QQC;
echo $var;

echo '<br><hr><br>';

$variavel = "nome dinamico";
$nome = "variavel";
echo $$nome;
