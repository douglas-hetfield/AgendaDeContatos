<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TelefonesPessoa $telefonesPessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Telefones Pessoa'), ['action' => 'edit', $telefonesPessoa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Telefones Pessoa'), ['action' => 'delete', $telefonesPessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefonesPessoa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Telefones Pessoas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Telefones Pessoa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="telefonesPessoas view large-9 medium-8 columns content">
    <h3><?= h($telefonesPessoa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pessoa') ?></th>
            <td><?= $telefonesPessoa->has('pessoa') ? $this->Html->link($telefonesPessoa->pessoa->id, ['controller' => 'Pessoas', 'action' => 'view', $telefonesPessoa->pessoa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($telefonesPessoa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($telefonesPessoa->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($telefonesPessoa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($telefonesPessoa->modified) ?></td>
        </tr>
    </table>
</div>
