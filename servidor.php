<?php

define('DB_SERVER', 'localhost', true);
define('DB_USER', 'root', true);
define('DB_SENHA', 'rostie2006', true);
define('DB_BASE', 'php1601', true);

mysql_connect(DB_SERVER, DB_USER, DB_SENHA) or die(mysql_error());
mysql_select_db(DB_BASE) or die('erro de banco de dados');

