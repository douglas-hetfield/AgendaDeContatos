<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bairro $bairro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Editar bairro'), ['action' => 'edit', $bairros->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar bairro'), ['action' => 'delete', $bairros->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $bairros->id)]) ?> </li>
        <li><?= $this->Html->link(__('Adicionar bairro'), ['action' => 'add']) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('<< Voltar'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="bairro view large-9 medium-8 columns content">
    <h3><?= h($bairros->nome_bairro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Bairro') ?></th>
            <td><?= h($bairros->nome_bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bairros->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= $this->Number->format($bairros->cidade_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($bairros->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($bairros->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Endereços do bairro '.$bairros->nome_bairro) ?></h4>
        <?php if (!empty($bairros->enderecos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Logradouro') ?></th>
                <th scope="col"><?= __('Cep') ?></th>
                <th scope="col"><?= __('Bairro') ?></th>
                <th scope="col"><?= __('Criado') ?></th>
                <th scope="col"><?= __('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($bairros->enderecos as $endereco): ?>
            <tr>
                <td><?= h($endereco->logradouro) ?></td>
                <td><?= h($endereco->cep) ?></td>
                <td><?= h($endereco->bairro_id) ?></td>
                <td><?= h($endereco->created) ?></td>
                <td><?= h($endereco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Mais'), ['controller' => 'Enderecos', 'action' => 'view', $endereco->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
