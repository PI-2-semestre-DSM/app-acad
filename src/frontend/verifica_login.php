<?php
require('../backend/classes/login.class.php');

if (isset($_POST['login'])) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $verifica = new Login();
        if ($verifica->verificarCredenciais($login, $senha)) {
            header("Location: pagina_inicial.php");
            exit();
        }
    }
} else {
    echo "nao existe?";
}

?>