<?php
require_once('../backend/classes/login.class.php');
include("login_ativo.php");
print_r($_SESSION['logged_in']);

if (isset($_POST['submit'])) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $verifica = new Login();
        if ($verifica->verificarCredenciais($login, $senha)) {
            $verifica->__destruct();
            header("Location: pagina_inicial.php");
            exit();
        }
        $verifica->__destruct();
    }
} else {
    echo "nao existe?";
    
}

?>