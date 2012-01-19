<?php
$inicio = microtime(true);

$agora = time();
$prazo = mktime(0, 0, 0, 12, 21, 2012);
$segundos = $prazo - $agora;
echo 'Agora: ' . date('d/m/Y - h:i:s', $agora);
echo '<br>';
echo 'O mundo acaba em ' . $segundos . ' segundos';

$final = microtime(true);
$tempoExecucao = $final - $inicio;
echo '<br><br>Este script demorou ' . $tempoExecucao . ' segundos para executar';