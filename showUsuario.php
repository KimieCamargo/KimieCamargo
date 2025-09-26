<?php
include_once("templates/header_usuario.php");
?>
<div class="container" id="view-contato-container">
    <?php include_once("templates/btnvoltar_usuario.html"); ?>
    <h1 id="main-title"> Todos os dados do Usuario <br> <?= $usuario["nome"] ?></h1>
    <p class="negrito">Tipo de Acesso: </p>
    <p><?= $usuario["acesso"] ?></p>

    <p class="negrito">Login: </p>
    <p><?= $usuario["login"] ?></p>
  
    <p class="negrito">Senha: </p>
    <p><?= $usuario["senha"] ?></p>
  
</div>

<?php
include_once("templates/footer.php");
?>