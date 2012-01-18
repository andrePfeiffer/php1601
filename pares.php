<html><head>
<title>números pares</title>
</head>
<body>
<?php if(!empty($_GET['numero'])): ?>
<div style="width:200px">
<?php
for ($i=0; $i < $_GET['numero']; $i++){
    if($i %2 == 0){
        echo '<div style="width:30px; text-align:center;float: left">' . $i . '</div>';
    }
}
?>
</div>
    <a href="pares.php">calcular um novo numero</a>
<?php else: ?>

<form method="get" action="pares.php">
    digite um numero: <input type="text" name="numero" />
    <input type="submit" value="calcular" />
</form>

<?php endif; ?>
</body></html>