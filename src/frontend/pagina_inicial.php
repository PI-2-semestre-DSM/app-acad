<?php
include("navbar.php");
require_once("login_ativo.php");
?>

<nav aria-label="Navegação de página">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="alunos.php" id="link-alunos">ALUNOS</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="financeiro.php" id="link-financeiro">FINANCEIRO</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="estoque.php" id="link-estoque">ESTOQUE</a>
        </li>
    </ul>
</nav>


<button><a href="logout.php">Fazer Logout</a></button>
</body>

</html>