<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $estado->id],
                ['confirm' => __('Tem certeza que deseja deletar {0}?', $estado->nome_estado)]
            )
        ?></li><hr>
        <li><?= $this->Html->link(__('Adicionar endereço'), ['controller' => 'Enderecos','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Adicionar bairro'), ['controller' => 'Bairros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Adicionar cidade'), ['controller' => 'Cidades', 'action' => 'add']) ?></li>
        <hr>
        <li><?= $this->Html->link(__('Listar endereços'), ['action' => 'index', 'controller' => 'Enderecos']) ?></li>
        <li><?= $this->Html->link(__('Listar bairros'), ['action' => 'index', 'controller' => 'Bairros']) ?></li>
        <li><?= $this->Html->link(__('Listar cidades'), ['action' => 'index', 'controller' => 'Cidades']) ?></li>
        <li><?= $this->Html->link(__('Listar estados'), ['action' => 'index', 'controller' => 'Estados']) ?></li>
        <hr>
        <li><?= $this->Html->link(__('<< Voltar'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estado form large-9 medium-8 columns content">
    <?= $this->Form->create($estado) ?>
    <fieldset>
        <legend><?= __('Editar Estado') ?></legend>
        <?php
            echo $this->Form->control('nome_estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
