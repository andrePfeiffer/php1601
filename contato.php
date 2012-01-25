<?php session_start();

if(count($_GET) > 0 || count($_POST) > 0){
    define('destino', 'andre@pfeiffer.com.br');
    define('titulo', 'titulo do meu email');
    $body = '';
    foreach ($_REQUEST as $nome => $valor) {
        $body .= $nome . ': ' . $valor . "\n";
    }
    $res = mail(destino, titulo, $body, "From: andre@pfeiffer.com.br");
    if($res){
        $_SESSION['aviso'] = 'Formulário enviado com sucesso';
        header("Location: contato.php");
        die();
    }
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php @include 'headers.php'; ?>
  </head>
  <body>
      <?php @include 'menu1.php'; ?>
      <?php if(!empty($_SESSION['aviso'])): ?>
        <?php print $_SESSION['aviso']; unset($_SESSION['aviso']); ?>
      <?php endif; ?>
      <form action="contato.php" method="post">
          Nome: <input type="text" name="nome" /><br />
          Email: <input type="text" name="email" /><br />
          Mensagem:<br />
          <textarea name="mensagem"></textarea><br />
          <input type="submit" value="enviar" />
      </form>
      <?php @include 'menu2.php'; ?>
  </body>
</html>