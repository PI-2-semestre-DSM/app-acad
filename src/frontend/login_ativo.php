<?php
require_once('../backend/classes/login.class.php');

$testa = new Login();
$testa->verificarLogin();
$testa->__destruct(); 