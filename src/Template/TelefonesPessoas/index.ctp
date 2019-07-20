<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TelefonesPessoa[]|\Cake\Collection\CollectionInterface $telefonesPessoas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Adicionar novo numero'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar contatos'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar contato'), ['controller' => 'Pessoas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="telefonesPessoas index large-9 medium-8 columns content">
    <h3><?= __('Telefones Pessoas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pessoa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($telefonesPessoas as $telefonesPessoa): ?>
            <tr>
                <td><?= $this->Number->format($telefonesPessoa->id) ?></td>
                <td><?= $this->Number->format($telefonesPessoa->numero) ?></td>
                <td><?= $telefonesPessoa->has('pessoa') ? $this->Html->link($telefonesPessoa->pessoa->id, ['controller' => 'Pessoas', 'action' => 'view', $telefonesPessoa->pessoa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telefonesPessoa->id]) ?> | 
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telefonesPessoa->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $telefonesPessoa->numero)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira página')) ?>
            <?= $this->Paginator->prev('< ' . __('Voltar')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Ultima página') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, {{current}} de {{count}} Registros')]) ?></p>
    </div>
</div>
