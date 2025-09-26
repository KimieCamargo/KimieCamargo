<?php
//INCLUINDO A CHAMADA DO ARQUIVO HEADER.PHP QUE CONTÉM O PADRÃO DO CABEÇALHO
//include_once em PHP serve para incluir um arquivo em outro, mas apenas uma vez durante a execução do script

include_once("templates/header.php");

?>

<div class="container">
    <div id="voltar-container">
        <a href="<?= $Base_url ?>index.php" id="link-voltar">Voltar</a>
    </div>

    <h1 id="main-title">EDIÇÃO DE PRODUTO</h1>

<!--FORMULÁRIO DE EDIÇÃO DE CONTATOS-->
<form id="add-Produto" action="<?= $Base_url ?>config/processo.php" method="post">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $Produto["id"] ?>">

    <div class="form-group">
        <label class="negrito" for="nome">Nome do Produto</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do Produto" value="<?= $Produto["nome_prod"] ?>" require>
    </div>
    <div class="form-group">
        <label class="negrito" for="estoque">Estoque</label>
        <input type="text" class="form-control" id="estoque" name="estoque" placeholder="Digite o valor do estoque" value="<?= $Produto["quantEstoq_prod"] ?>" require>
    </div>
    <div class="form-group">
        <label class="negrito" for="custo">Preço do Custo</label>
        <textarea type="text" class="form-control" id="obs" name="Preço do custo" placeholder="Digite o preço do custo" rows="3"><?= $Produto["precoCust_prod"] ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>

</form>

</div>


<?php
//INCLUINDO A CHAMADA DO ARQUIVO FOOTER.PHP QUE CONTÉM O PADRÃO DO RODAPÉ

include_once("templates/footer.php");

?>