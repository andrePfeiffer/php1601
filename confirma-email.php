<?php
if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];

    require_once 'servidor.php';

    $jaTem = consultaDados("select id from usuarios where codigoConfirmacao = '$codigo'");
    if (mysql_num_rows($jaTem) > 0) {
        consultaDados("update usuarios set nivelAcesso = 1 where codigoConfirmacao = '$codigo'");
        $sucesso = true;
    }else{
        $sucesso = false;
    }

} else {
    $sucesso = false;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php include 'headers.php'; ?>   
    </head>
    <body>
<?php include 'menu1.php'; ?>   
        <?php if ($sucesso): ?>
            seu cadastro foi confirmado!
        <?php else: ?>
            erro ao confirmar o email, favor entrar em contato pelo email <a href="mailto:andre@pfeiffer.com.br">andre@pfeiffer.com.br</a>
            <br /><br />
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                Digite seu código aqui: <input type="text" name="codigo" />
                <input type="submit" value="enviar" />
            </form>
        <?php endif; ?>
        <?php include 'menu2.php'; ?>   
    </body>
</html>