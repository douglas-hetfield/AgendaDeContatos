<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cidade[]|\Cake\Collection\CollectionInterface $cidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Adicionar endereço'), ['controller' => 'Enderecos','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Adicionar bairro'), ['controller' => 'Bairros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Adicionar cidade'), ['controller' => 'Cidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Adicionar estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <hr>
        <li><?= $this->Html->link(__('Listar endereços'), ['action' => 'index', 'controller' => 'Enderecos']) ?></li>
        <li><?= $this->Html->link(__('Listar bairros'), ['action' => 'index', 'controller' => 'Bairros']) ?></li>
        <li><?= $this->Html->link(__('Listar estados'), ['action' => 'index', 'controller' => 'Estados']) ?></li>
        <hr>
        <li><?= $this->Html->link(__('<< Voltar'), ['controller' => 'Enderecos', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cidade index large-9 medium-8 columns content">
    <h3><?= __('Cidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cidades as $cidade): ?>
            <tr>
                <td><?= h($cidade->nome_cidade) ?></td>
                <td><?= $this->Number->format($cidade->estado_id) ?></td>
                <td><?= h($cidade->created) ?></td>
                <td><?= h($cidade->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Mais'), ['action' => 'view', $cidade->id]) ?> | 
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cidade->id]) ?> | 
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cidade->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $cidade->id)]) ?>
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
