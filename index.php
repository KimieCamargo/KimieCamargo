<?php
//INCLUINDO O TEMPLATE DO CABEÇALHO
include_once("templates/header.php");
//CONEXÃO COM O BANCO
include_once("config/conexao.php");
?>
<div id="container">
    <!-- CORPO DA HOME -->
    <!-- CHECAR SE EXISTE MENSAGEM NA SESSÃO
Sempre que acontecer alguma operação de CRUD, deverá
aparecer uma mensagem na SESSÃO -->

    <?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>

    <h1 id="main-title">Minha Agenda</h1>

    <?php if (count($contatos) > 0): ?>
    <table class="table" id="contatos-tabela">
        <thead>
            <!-- Cabeçalho da tabela-->
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <!-- CORPO DA TABELA -->
        <tbody>
            <?php foreach ($contatos as $contato): ?>
            <tr>
                <td scope="row" class="col-id"><?= $contato["ID"] ?></td>
                <td scope="row"><?= $contato["nome"] ?></td>
                <td scope="row"><?= $contato["telefone"] ?></td>

                <!INSERINDO OS BOTÕES -->
                    <td class="actions">
                        <!--CAPTURAR O ID SERVINDO COMO PASSAGEM DE PARÂMETRO-->
                        <a href="<?= $BASE_URL ?>show.php?ID=<?= $contato["ID"] ?>">
                            <i class="fas fa-eye check-icon"></i></a>

                        <!--Editar-->
                        <a href="<?= $BASE_URL ?>editarContato.php?ID=<?= $contato["ID"] ?>">
                            <i class="far fa-edit edit-icon"></i></a>

                        <!--Deletar-->

                        <!-- BOTAO DELETAR EU PRECISO CRIAR UM FORM PARA MUDAR A AÇÃO DO FORMULARIO--->
                        <form class="delete-form" action="<?= $BASE_URL ?>config/processo.php" method="POST">
                        <input type="hidden" name="type" value="delete">
                        <input type="hidden" name="ID" value="<?= $contato["ID"] ?>">
                        <!--CRIANDO UMA FUNÇÃO JAVA SCRIP PARA CONFIRMAR SE VOCE QUER EXCLUIR UM CONTATO--->
                            <button type="submit" class="btn-deletar" onclick="return confirm('TEM CERTEZA QUE DESEJA EXCLUIR ESTE CONTATO? ')">
                                <!--preciso criar um hiden para dizer que a ação vai ser diferente o nome vai ser delete -->
                             
                                <i class="fas fa-times delete-icon"></i>
                            </button>
                        </form>
                    </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

    <?php else: ?>
    <p id="empty-list-text">Ainda não existem Contatos cadastrados
        <a href="<?= $BASE_URL ?>addContato.php">
            CLIQUE AQUI PARA ADICIONAR UM NOVO CONTATO
        </a>
    </p>

    <?php endif; ?>
</div>
<?php
//INCLUINDO O TEMPLATE DO RODAPÉ
include_once("templates/footer.php");
?>