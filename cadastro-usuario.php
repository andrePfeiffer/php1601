<?php
$sucesso = false;

if(isset($_POST['nome'])){
    require_once 'servidor.php';
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    $aviso = '';

    if(empty($nome)){
        $aviso .= 'O nome é obrigatório<br />';
    }
    if(empty($email)){
        $aviso .= 'O email é obrigatório<br />';
    }else{
        $jaTem = consultaDados("select id from usuarios where email = '$email'");
        if(mysql_num_rows($jaTem) > 0){
            $aviso .= 'O email já esta cadastrado<br />';
        }
    }
    if(empty($login)){
        $aviso .= 'O login é obrigatório<br />';
    }else{
        $jaTem = consultaDados("select id from usuarios where login = '$login'");
        if(mysql_num_rows($jaTem) > 0){
            $aviso .= 'O login já esta cadastrado<br />';
        }
    }
    if(empty($senha)){
        $aviso .= 'A senha é obrigatória<br />';
    }elseif($senha != $confirmarSenha){
        $aviso .= 'As senhas não são iguais<br />';
    }

    if(empty($aviso)){        
        $codigoConfirmacao = md5($email);
        $body = 'Clique no link abaixo para confirmar seu cadastro:<br><br>';
        $body .= '<a href="http://www.ctiparos.com.br/php1601/confirma-email.php?codigo=' . $codigoConfirmacao . '">http://www.ctiparos.com.br/php1601/confirma-email.php?codigo=' . $codigoConfirmacao . '</a>';
        $res = mail($email, 'Confirmação de cadastro', $body, "From:andre@pfeiffer.com.br\r\nContent-type: text/html");
        if(!$res){
            $aviso .= 'Erro ao enviar o email de confirmação<br />';
        }
    }
    
    if(empty($aviso)){
        $fraseSecreta = 'kldajsnd78sad983q0jdaiuwhdksajdnwasoidja93j';
        $senhaCodificada = hash('sha512', $senha . $fraseSecreta);
        
        consultaDados("insert into usuarios (nome, sobrenome, email, login, senha, nivelAcesso, codigoConfirmacao, dataCadastro) 
                        values ('$nome', '$sobrenome', '$email', '$login', '$senhaCodificada', 0, '$codigoConfirmacao', now())");
        $aviso = 'Parabéns! Você se cadastrou!';
        $sucesso = true;
    }
    
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
        <?php if(!empty($aviso)): ?>
            <?php print $aviso; ?>
        <?php endif; ?>
        
        <?php if(!$sucesso): ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="nome">Nome</label> <input type="text" name="nome" id="nome" value="<?php if(!empty($_POST['nome'])){ echo $_POST['nome']; } ?>" /><br />
            <label for="sobrenome">Sobrenome</label><input type="text" name="sobrenome" id="sobrenome" value="<?php if(!empty($_POST['sobrenome'])){ echo $_POST['sobrenome']; } ?>" /><br />
            <label for="email">Email</label><input type="text" name="email" id="email" value="<?php if(!empty($_POST['email'])){ echo $_POST['email']; } ?>" /><br />
            <label for="login">Login</label><input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])){ echo $_POST['login']; } ?>" /><br />
            <label for="senha">Senha</label><input type="password" name="senha" id="senha" value="<?php if(!empty($_POST['senha'])){ echo $_POST['senha']; } ?>" /><br />
            <label for="confirmarSenha">Confirme sua senha</label><input type="password" name="confirmarSenha" id="confirmarSenha" value="<?php if(!empty($_POST['confirmarSenha'])){ echo $_POST['confirmarSenha']; } ?>" /><br />
            <input type="submit" value="cadastrar" />
        </form>
        <?php endif; ?>
        <?php include 'menu2.php'; ?>   
    </body>
</html>