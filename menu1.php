<?php
require_once 'servidor.php';
$itensMenuQuery = consultaDados("select * from itensMenu order by ordem asc");
?>
        <div id="site">
            <div id="topo">
                <h1>Site feito na Íparos</h1>
            </div>
            <div id="menu">
                <ul>
                    <?php while($itensMenu = mysql_fetch_array($itensMenuQuery)): ?>
                        <li><a href="<?php print $itensMenu['url']; ?>"><?php print $itensMenu['texto']; ?></a></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div id="conteudo">
