<?php

if(!function_exists('cronometro_PHP')){
    $inicio = microtime(true);
    function cronometro_PHP(){
        global $inicio;
        $final = microtime(true);
        $tempoExecucao = $final - $inicio;
        echo '<br><br>Este script demorou ' . $tempoExecucao . ' segundos para executar';    
    }
    register_shutdown_function('cronometro_PHP');
}
