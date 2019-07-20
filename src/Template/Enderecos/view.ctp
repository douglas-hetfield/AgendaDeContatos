<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Editar endereco'), ['action' => 'edit', $endereco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar endereco'), ['action' => 'delete', $endereco->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $endereco->id)]) ?> </li>
        <li><?= $this->Html->link(__('Adicionar endereco'), ['action' => 'add']) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('<< Voltar'), ['controller' => 'Enderecos', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="endereco view large-9 medium-8 columns content">
    <h3><?= h($endereco->logradouro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($endereco->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($endereco->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($endereco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($endereco->bairro_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($endereco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($endereco->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Pessoas com este endereço') ?></h4>
        <?php if (!empty($endereco->pessoas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Endereço') ?></th>
                <th scope="col"><?= __('Criado') ?></th>
                <th scope="col"><?= __('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($endereco->pessoas as $pessoas): ?>
            <tr>
                <td><?= h($pessoas->nome) ?></td>
                <td><?= h($pessoas->email) ?></td>
                <td><?= h($endereco->logradouro) ?></td>
                <td><?= h($pessoas->created) ?></td>
                <td><?= h($pessoas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Mais'), ['controller' => 'Pessoas', 'action' => 'view', $pessoas->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
