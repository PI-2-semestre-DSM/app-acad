<?php
require_once("../backend/classes/login.class.php");
include("login_ativo.php");

$logout = new Login();
$logout->logout();
$logout->__destruct();