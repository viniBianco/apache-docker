<div class="center-block site">
    <h1 class="text-center">Chat Online</h1>
    <h2>Mensagens</h2>
    <?php foreach ($mensagens as $mensagem) : ?>
        <p>
            <strong><?= $mensagem->getUsuario() ?>:</strong>
            <?= $mensagem->getTexto() ?>
        </p>
    <?php endforeach ?>
</div>