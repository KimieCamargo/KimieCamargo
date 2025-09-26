<?php
include_once("templates/header.php");
?>
<div class="container" id="view-contato-container">
    <?php include_once("templates/btnvoltar.html"); ?>
    <h1 id="main-title"><?= $contato["nome"] ?></h1>
    <p class="negrito">Telefone: </p>
    <p><?= $contato["telefone"] ?></p>

    <p class="negrito">Observação: </p>
    <p><?= $contato["obs"] ?></p>
</div>

<?php
include_once("templates/footer.php");
?>