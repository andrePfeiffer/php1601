<?php
$inicio = microtime(true);

function dataExtenso($quando = null){
    if(is_null($quando)){
        $quando = time();
    }
    $diaSemana = array(
        'Domingo', 
        'Segunda-feira', 
        'Terça-feira', 
        'Quarta-feira', 
        'Quinta-feira', 
        'Sexta-feira', 
        'Sábado'
        );
    $meses[0] = 'janeiro';
    $meses[1] = 'fevereiro';
    $meses[2] = 'março';
    $meses[3] = 'abril';
    $meses[4] = 'maio';
    $meses[5] = 'junho';
    $meses[6] = 'julho';
    $meses[7] = 'agosto';
    $meses[8] = 'setembro';
    $meses[9] = 'outubro';
    $meses[10] = 'novembro';
    $meses[11] = 'dezembro';
    $retorno = $diaSemana[date('w', $quando)] . ', ' .  date('d', $quando) . ' de ' . $meses[date('n', $quando)-1] . ' de ' . date('Y', $quando);
    
    return $retorno;
}


$agora = time();
$prazo = mktime(0, 0, 0, 12, 21, 2012);
$segundos = $prazo - $agora;
$dias = floor(($segundos) / (60*60*24));
$segundos -= $dias * (60*60*24);
$horas = floor(($segundos) / (60*60));
$segundos -= $horas * (60*60);
$minutos = floor($segundos/60);
$segundos -= $minutos*60;

echo 'Agora: ' . dataExtenso() . ' - ' . date('h:i:s', $agora);
echo '<br>';
echo 'Fim do mundo: ' . dataExtenso($prazo);
echo '<br>';
echo 'O mundo acaba em ' . $dias . ' dias, ' . $horas . ' horas, ' . $minutos . ' minutos e ' . $segundos . ' segundos';

$final = microtime(true);
$tempoExecucao = $final - $inicio;
echo '<br><br>Este script demorou ' . $tempoExecucao . ' segundos para executar';