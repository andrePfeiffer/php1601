<?php
if($_SERVER['HTTP_HOST'] == 'localhost'){
    define('DB_SERVER', 'localhost', true);
    define('DB_USER', 'root', true);
    define('DB_SENHA', 'rostie2006', true);
    define('DB_BASE', 'php1601', true);
    
    define('MOSTRA_ERROS_BD', true);

}elseif($_SERVER['HTTP_HOST'] == 'ctiparos.com.br' || $_SERVER['HTTP_HOST'] == 'www.ctiparos.com.br'){
    define('DB_SERVER', 'localhost', true);
    define('DB_USER', 'ctiparos_iparos', true);
    define('DB_SENHA', 'rostie2006', true);
    define('DB_BASE', 'ctiparos_php1601', true);
    
    define('MOSTRA_ERROS_BD', true);
}

@mysql_connect(DB_SERVER, DB_USER, DB_SENHA) or die(db_erro());
@mysql_select_db(DB_BASE) or die(db_erro());


function consultaDados($query){
    $retorno = @mysql_query($query) or die(db_erro());
    return $retorno;
}

function db_erro(){
    if(MOSTRA_ERROS_BD){
        $retorno = mysql_error();
    }else{
        $retorno = "erro de banco de dados";
    }
    
    return $retorno;
}
