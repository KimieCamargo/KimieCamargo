<?php
    //incluindo o template do cabeçalho
    include_once("templates/header.php");
?>

<div class="container">
<?php include_once("templates/btnvoltar.html"); ?> 

<h1 id="main-title">Editar contato</h1>

<form id="create-form" action="<?= $BASE_URL ?>config/processo.php" method="POST">
<input type="hidden" name="type" value="edit">
<input type="hidden" name="ID" value="<?= $contato["ID"] ?>">

<div class="form-group">

<label for="nome">Nome do Contato: </label>
<input type="text" class="form-control" id="nome" name="nome" value="<?= $contato["nome"] ?>" required>

</div>                  

<div class="form-group">

<label for="telefone">Telefone do Contato: </label>
<input type="text" class="form-control" id="telefone" name="telefone" value="<?= $contato["telefone"] ?>" required>

</div>

<div class="form-group">

<label for="obs">Observação: </label>
<textarea type="text" class="form-control" id="obs" name="obs" row="3"><?= $contato["obs"] ?></textarea>

</div>

<button type="submit" class="btn btn-primary">Atualizar</button>

</form>
</div>
<?php
    //incluindo o template do rodapé
    include_once("templates/footer.php");
?>
