<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Editar Pessoa'), ['action' => 'edit', $pessoa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Pessoa'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $pessoa->nome)]) ?> </li>
        <li><?= $this->Html->link(__('Adicionar novo numero'), ['controller' => 'TelefonesPessoas', 'action' => 'add']) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('<< Voltar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pessoas view large-9 medium-8 columns content">
    <h3>Informações</h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pessoa->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($pessoa->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('logradouro') ?></th>
            <td><?= h($pessoa->endereco->logradouro ." | ") ?> <?= $this->Html->link(__('Mais'), ['controller' => 'Enderecos', 'action' => 'view', $pessoa->endereco->id]) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($pessoa->endereco->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($pessoa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($pessoa->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Números de '. $pessoa->nome) ?></h4>
        <?php if (!empty($pessoa->telefones_pessoas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Número') ?></th>
                <th scope="col"><?= __('Criado') ?></th>
                <th scope="col"><?= __('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($pessoa->telefones_pessoas as $telefonesPessoas): ?>
            <tr>
                <td><?= h($telefonesPessoas->numero) ?></td>
                <td><?= h($telefonesPessoas->created) ?></td>
                <td><?= h($telefonesPessoas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TelefonesPessoas', 'action' => 'edit', $telefonesPessoas->id]) ?> | 
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TelefonesPessoas', 'action' => 'delete', $telefonesPessoas->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $telefonesPessoas->numero)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
