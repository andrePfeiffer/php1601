<?php

mysql_connect("tunnel.pagodabox.com:3306", "claris", "yNUDJHYa") or die(mysql_error());
mysql_select_db("iparos");
$sql = "
    CREATE TABLE IF NOT EXISTS `itensmenu` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `texto` varchar(50) NOT NULL,
  `ordem` tinyint(4) NOT NULL DEFAULT '0',
  `dataCadastro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;
INSERT INTO `itensmenu` (`id`, `link`, `texto`, `ordem`, `dataCadastro`) VALUES
(13, 'index.php', 'Home', -10, '2011-10-24 20:08:24'),
(14, 'login.php', 'login', -5, '2011-10-24 20:09:04'),
(5, 'http://www.iparos.com.br', 'iparos', 30, '2011-10-24 19:40:13'),
(6, 'cadastro-usuarios.php', 'cadastro', -8, '2011-10-24 19:42:19'),
(8, 'login.php?acao=sair', 'sair', 1, '2011-10-24 19:44:08'),
(18, 'cadastro-noticias.php', 'Cadastro de notÃ­cias', -1, '2011-12-05 17:38:16'),
(11, 'noticias.php', 'NotÃ­cias', -2, '2011-10-24 20:05:10'),
(12, 'recupera-senha.php', 'Recupera senha', -4, '2011-10-24 20:07:43'),
(17, 'modifica-menu.php', 'Modifica menu', 0, '2011-12-05 17:37:51');

    ";
//mysql_query($sql);
$itensMenuQuery = mysql_query("select * from itensMenu order by ordem asc");
?>
oie
<ul>
                        <?php $count = 0; ?>
                        <?php while($itensMenu = mysql_fetch_array($itensMenuQuery)): ?>
                            <li><a href="<?php print $itensMenu['link']; ?>" <?php if($count == 0){ print 'class="first"'; } ?>><?php print $itensMenu['texto']; ?></a></li>
                            <?php $count++; ?>
                        <?php endwhile; ?>
                    </ul>