<?php
require('../src/backend/classes/login.class.php');


$login = $_POST["login"];
$senha = $_POST["senha"];


$verifica = new Login();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($validador->verificarCredenciais($login, $senha)) {
        header("Location: home.php");
        exit();
    }
}

?>
