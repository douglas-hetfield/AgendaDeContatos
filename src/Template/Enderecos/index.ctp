<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco[]|\Cake\Collection\CollectionInterface $endereco
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
        <li><?= $this->Html->link(__('Listar bairros'), ['action' => 'index', 'controller' => 'Bairros']) ?></li>
        <li><?= $this->Html->link(__('Listar cidades'), ['action' => 'index', 'controller' => 'Cidades']) ?></li>
        <li><?= $this->Html->link(__('Listar estados'), ['action' => 'index', 'controller' => 'Estados']) ?></li>
        <hr>
        <li><?= $this->Html->link(__('<< Voltar'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="endereco index large-9 medium-8 columns content">
    <h3><?= __('Endereços') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro_id') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enderecos as $endereco): ?>
            <tr>
                <td><?= h($endereco->logradouro) ?></td>
                <td><?= h($endereco->cep) ?></td>
                <td><?= $this->Number->format($endereco->bairro_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Mais'), ['action' => 'view', $endereco->id]) ?> | 
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $endereco->id]) ?> | 
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $endereco->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $endereco->id)]) ?>
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
