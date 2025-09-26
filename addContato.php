<?php
    //incluindo o template do cabeçalho
    include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/btnvoltar_usuario.html"); ?>

    <h1 id="main-title">Cadastro de contatos</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/processo.php" method="POST">
        <input type="hidden" name="type" value="create">

        <div class="form-group">

            <label for="nome">Nome do Contato: </label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do contato"
                required>

        </div>

        <div class="form-group">

            <label for="telefone">Telefone do Contato: </label>
            <input type="text" class="form-control" id="telefone" name="telefone"
                placeholder="Digite o telefone do contato" required>

        </div>

        <div class="form-group">

            <label for="obs">Observação: </label>
            <textarea type="text" class="form-control" id="obs" name="obs" placeholder="Digite a observação do contato"
                row="3"></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
</div>
<?php
    //incluindo o template do rodapé
    include_once("templates/footer.php");
?>