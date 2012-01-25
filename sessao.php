<?php session_start();

$_SESSION['nome'] = 'André Pfeiffer';
echo $_SESSION['nome'];
unset($_SESSION['nome']);
