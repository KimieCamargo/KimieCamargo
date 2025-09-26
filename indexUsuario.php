<?php
//INCLUINDO O TEMPLATE DO CABEÇALHO
include_once("templates/header_usuario.php");
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

    <h1 id="main-title">LISTA DE USUARIOS</h1>

    <?php if (count($usuarios) > 0): ?>
    <table class="table" id="contatos-tabela">
        <thead>
            <!-- Cabeçalho da tabela-->
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Acesso ao sistema</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <!-- CORPO DA TABELA -->
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td scope="row" class="col-id"><?= $usuario["ID"] ?></td>
                <td scope="row"><?= $usuario["nome"] ?></td>
                <td scope="row"><?= $usuario["acesso"] ?></td>

                <!INSERINDO OS BOTÕES -->
                    <td class="actions">
                        <!--CAPTURAR O ID SERVINDO COMO PASSAGEM DE PARÂMETRO-->
                        <a href="<?= $BASE_URL ?>showUsuario.php?ID=<?= $usuario["ID"] ?>">
                            <i class="fas fa-eye check-icon"></i></a>

                        <!--Editar-->
                        <a href="<?= $BASE_URL ?>editarUsuario.php?ID=<?= $usuario["ID"] ?>">
                            <i class="far fa-edit edit-icon"></i></a>
                        <!--- Adicionar--->
                            <a href="<?= $BASE_URL ?>addUsuario.php">
                            <i class="far fa-plus adit-icon"></i></a>
                        <!--Deletar-->

                        <!-- BOTAO DELETAR EU PRECISO CRIAR UM FORM PARA MUDAR A AÇÃO DO FORMULARIO--->
                        <form class="delete-form" action="<?= $BASE_URL ?>config/processo_usuario.php" method="POST">
                        <input type="hidden" name="type" value="delete">
                        <input type="hidden" name="ID" value="<?= $usuario["ID"] ?>">
                        <!--CRIANDO UMA FUNÇÃO JAVA SCRIP PARA CONFIRMAR SE VOCE QUER EXCLUIR UM CONTATO--->
                            <button type="submit" class="btn-deletar" onclick="return confirm('TEM CERTEZA QUE DESEJA EXCLUIR ESTE USUARIO? ')">
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
        <a href="<?= $BASE_URL ?>addUsuario.php">
            CLIQUE AQUI PARA ADICIONAR UM NOVO CONTATO
        </a>
    </p>

    <?php endif; ?>
</div>
<?php
//INCLUINDO O TEMPLATE DO RODAPÉ
include_once("templates/footer.php");
?>