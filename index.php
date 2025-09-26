<!--INÍCIO DA ÁREA DO CABEÇALHO-->
<?php
//INCLUINDO A CHAMADA DO ARQUIVO HEADER.PHP QUE CONTÉM O PADRÃO DO CABEÇALHO
//include_once em PHP serve para incluir um arquivo em outro, mas apenas uma vez durante a execução do script

include_once("templates/header.php");
include_once("config/processo.php");

?>
<!--FIM DO CABEÇALHO-->

<!--INÍCIO DO CORPO DA HOME-->
<div id="container">
<!--CHECAR SE EXISTE MENSAGEM NA SESSION, pois sempre que acontecer alguma operação de CRUD, deverá aparecer uma mensagem na SESSION-->

<?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id='msg'><?= $printMsg ?></p>
<?php endif; ?>

<h1 id="main-title">Minha Papelaria</h1>

<!--MONTAGEM DA TABELA QUE RECEBERÁ TODOS OS REGISTROS DA TABELA DE CONTATOS QUE ESTÁ NO BANCO-->

<?php if(count($Produto)>0):?>
    
    <!--Início da Tabela-->
    <table class="table" id="tabela-Produto">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">quantidade de Estoque</th>
                <th scope="col">preço Custo</th>
                <th scope="col">preço Venda</th>
                <th scope="col">quantidade Minima</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <!--CORPO DA TABELA-->
        <tbody>
            <?php foreach($Produto as $Produto): ?>
                <tr>
                    <td scope="row" class="col-id"><?= $Produto["id"] ?></td>
                    <td scope="row"><?= $Produto["nome_prod"] ?></td>
                    <td scope="row"><?= $Produto["quantEstoq_prod"] ?></td>
                    <td scope="row"><?= $Produto["precoCust_prod"] ?></td>
                    <td scope="row"><?= $Produto["precoVend_prod"] ?></td>
                    <td scope="row"><?= $Produto["quantMin_prod"] ?></td>
                    <!--INSERINDO OS ÍCONES-->
                    <td class="actions-icons">
                        <!--Link para o arquivo show. Lembrar que teremos que direcionar para o arquivo além de fornecer o parâmetro que irá disparar a pesquisa. Esse parâmetro é o ID do contato-->
                        <a href="<?= $Base_url ?>show.php?id=<?= $Produto["id"]?>">
                            <i class="fas fa-eye show-icon"></i>
                        </a>
                        <a href="<?= $Base_url ?>editarProduto.php?id=<?= $Produto["id"]?>">
                            <i class="far fa-edit edit-icon"></i>
                        </a>
                        <button type="submit" class="btn-deletar">
                            <i class="fas fa-times delete-icon"></i>
                        </button>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>


    </table>

    <?php else: ?>
        <h2>Não existem Produtos Cadastrados no Banco</h2>
        <h3>
            <a href="<?= $Base_url ?>addProduto.php">Clique aqui para Adicionar um novo Produto</a>
        </h3>
<?php endif; ?>
</div>
<!--FIM DO CORPO DA HOME-->


<!--INÍCIO DA ÁREA DO RODAPÉ-->
<?php
//INCLUINDO A CHAMADA DO ARQUIVO FOOTER.PHP QUE CONTÉM O PADRÃO DO RODAPÉ

include_once("templates/footer.php");

?>
<!--FIM DA ÁREA DO RODAPÉ-->