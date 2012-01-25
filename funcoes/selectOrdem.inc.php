<?php

/**
 *
 * @param int $valorPadrao - aqui você define o valor padrão que vai aparecer no select
 * @param int $inicio - o primeiro valor possível no select
 * @param int $fim - o último valor possível no select
 * @return string - retorna um select para ser utilizado na ordenação de itens
 */
function selectOrdem($valorPadrao=0, $inicio=-100, $fim=100){
    $retorno = '';
    $retorno .= '<select name="ordem">';
    for($i=$inicio; $i<=$fim; $i++){
        $retorno .= '<option value="' . $i . '"';
        if($i==$valorPadrao){ 
            $retorno .= 'selected'; 
        }
        $retorno .= '>' . $i . '</option>';
    }
    $retorno .= '</select>';
    
    return $retorno;
}