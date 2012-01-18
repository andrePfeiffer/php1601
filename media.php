<?php
if (isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3']) && isset($_GET['nota4'])) {
    $recebeuMedias = true;
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $nota4 = $_GET['nota4'];

    $media = ($nota1 * 1 + $nota2 * 2 + $nota3 * 3 + $nota4 * 4) / 10;
} else {
    $recebeuMedias = false;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
      <?php if($recebeuMedias): ?>
          Sua média é <?php print $media; ?><br />
          <a href="media.html">calcule uma nova média</a>
      <?php else: ?>
          <a href="media.html">calcule sua média</a>
      <?php endif; ?>
  </body>
</html>
