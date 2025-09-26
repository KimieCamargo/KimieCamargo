<?php
    //incluindo o template do cabeçalho
    include_once("templates/header_usuario.php");
?>

<div class="container">
    <?php include_once("templates/btnvoltar_usuario.html"); ?>

    <h1 id="main-title">Cadastro de Usuário</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/processo_usuario.php" method="POST">
        <input type="hidden" name="type" value="create">

        <div class="form-group">
        <label  for="acesso">Acesso:</label>
                    <select name="acesso" id="acesso">
                        <option value="Administrador">Administrador</option>
                        <option value="Funcionário)">Funcionario</option>
                    </select>
        </div>
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do contato"
                required>
        </div>

        <div class="form-group">
            <label for="login">login: </label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Digite o seu login"
                required>
        </div>

     
        <div class="form-group">
            <label for="senha">Senha: </label>
            <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a sua senha"
                required>
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
</div>
<?php
    //incluindo o template do rodapé
    include_once("templates/footer.php");
?>