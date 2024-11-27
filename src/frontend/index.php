<?php
include ("navbar.php");

?>
    <div class="container text-center" style="margin-top: 100px;">
        <div class="dropdown d-inline-block " style="background-color:#D9D9D9;" >
            
                <!-- usarei php para conferir login -->
                <form class="px-4 py-3" id="loginForm" action="verifica_login.php" method="POST">
                    <div class="form-group">
                        <label for="exampleDropdownFormNumber">Usuário</label>
                        <!-- modifiquei o tipo para texto (tava conferindo como texto no sql) -->
                        <input type="text" class="form-control" id="exampleDropdownFormNumber" name="login" placeholder="Digite seu Usuário" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" name="senha" placeholder="Senha" required>
                    </div>
                    <input type="submit" value="Entrar" class="btn btn-primary" name="submit">
                </form>
                
                
            
        </div>
    </div>

   <!--
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                
                <div class="modal-body">
                    <form id="registerForm" onsubmit="registrarUsuario(event)">
                        <div class="form-group">
                            <label for="registerName">Nome</label>
                            <input type="text" class="form-control" id="registerName" placeholder="Digite seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="registerNumber">Numeração de usuário</label>
                            <input type="number" class="form-control" id="registerNumber" placeholder="Digite sua numeração" required>
                        </div>
                        <div class="form-group">
                            <label for="registerPassword">Senha</label>
                            <input type="password" class="form-control" id="registerPassword" placeholder="Senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
-->
            </div>
        </div>
    </div>
</body>
</html>
