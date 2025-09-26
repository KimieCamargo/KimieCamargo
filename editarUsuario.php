<?php
    //incluindo o template do cabeçalho
    include_once("templates/header_usuario.php");
?>

<div class="container">
    <?php include_once("templates/btnvoltar_usuario.html"); ?>

    <h1 id="main-title">Editar usuario</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/processo_usuario.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="ID" value="<?= $usuario["ID"] ?>">

        <div class="form-group">
            <label class="espaca-esquerda" for="acesso">Acesso:</label>
            <select name="acesso" id="acesso" value="<?= $usuario["senha"] ?>">
                <option value="Administrador">Administrador</option>
                <option value="Funcionário">Funcionario</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $usuario["nome"] ?>" required>

        </div>

        <div class="form-group">

            <label for="login">Login: </label>
            <input type="text" class="form-control" id="login" name="login" value="<?= $usuario["login"] ?>" required>

        </div>

        <div class="form-group">

            <label for="senha">Senha: </label>
            <input type="text" class="form-control" id="senha" name="senha" value="<?= $usuario["senha"] ?>" required>

        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>

    </form>
</div>
<?php
    //incluindo o template do rodapé
    include_once("templates/footer.php");
?>