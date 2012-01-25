<?php
header("Content-type: text/html; charset=utf-8");
setcookie('cor', 'prêto', time()+9999);
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

      Sua cor predileta é <?php print $_COOKIE['cor']; ?>
      
      <?php @include 'menu2.php'; ?>
  </body>
</html>