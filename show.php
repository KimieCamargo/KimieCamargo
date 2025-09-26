<!--INÍCIO DO CABEÇALHO-->
<?php
//INCLUINDO A CHAMADA DO ARQUIVO HEADER.PHP QUE CONTÉM O PADRÃO DO CABEÇALHO

include_once("templates/header.php");
include_once("config/processo.php");


?>
<!--FIM DO CABEÇALHO-->

<!--INÍCIO DO CORPO DA HOME-->

<div class="container" id="view-produto-container">
<div id="voltar-conteiner">
    <a href="<?= $Base_url ?>index.php" id="link-voltar">Voltar</a>
</div>

    <h1 id="main-title"><?= $Produto["nome_prod"] ?></h1>
    <p class="negrito">Nome</p>
    <p><?= $Produto["quantEstoq_prod"] ?></p>
    <p class="negrito">quantidade de Estoque</p>
    <p><?= $Produto["precoCust_prod"] ?></p>
    <p class="negrito">preço Custo</p>
    <p><?= $Produto["precoVend_prod"] ?></p>
    <p class="negrito">preço Venda</p>
    <p><?= $Produto["quantMin_prod"] ?></p>
    <p class="negrito">quantidade Minima</p>
</div>

<!--FIM DO CORPO DA HOME-->

<!--INÍCIO DO RODAPÉ-->
<?php
//INCLUINDO A CHAMADA DO ARQUIVO FOOTER.PHP QUE CONTÉM O PADRÃO DO RODAPÉ

include_once("templates/footer.php");

?>
<!--FIM DO RODAPÉ-->