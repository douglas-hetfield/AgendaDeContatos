<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa[]|\Cake\Collection\CollectionInterface $pessoas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Adicionar Pessoa'), ['action' => 'add']) ?></li>
        <hr>
        <li><?= $this->Html->link(__('Adicionar endereço'), ['controller' => 'Enderecos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar endereços'), ['controller' => 'Enderecos', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pessoas index large-9 medium-8 columns content">
    <h3><?= __('Contatos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Rua') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoas as $pessoa): ?>
                <?php
                    //var_dump($pessoa->endereco);
                ?>
            <tr>
                <td><?= h($pessoa->nome) ?></td>
                <td><?= h($pessoa->email) ?></td>
                <td><?= h($pessoa->endereco->logradouro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Mais'), ['action' => 'view', $pessoa->id]) ?> |
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pessoa->id]) ?> | 
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $pessoa->nome)]) ?>
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
