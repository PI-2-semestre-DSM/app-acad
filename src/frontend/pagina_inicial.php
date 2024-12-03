<?php
include("navbar.php");
require_once("login_ativo.php");
?>

<nav aria-label="Navegação de página" style="margin-top:50px">
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


<div class="titulo" style="margin-top:50px">
<button type="button" class="btn btn-primary btn-lg"><a href="logout.php" style="text-decoration:none; color:#FFF;">Fazer Logout</a></button>
</div>
</body>

</html>