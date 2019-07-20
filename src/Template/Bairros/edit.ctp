<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bairro $bairro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $bairro->id],
                ['confirm' => __('Tem certeza que deseja deletar {0}?', $bairro->nome_bairro)]
            )
        ?>
        <hr>
        <li><?= $this->Html->link(__('Adicionar endereço'), ['controller' => 'Enderecos','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Adicionar cidade'), ['controller' => 'Cidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Adicionar estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <hr>
        <li><?= $this->Html->link(__('Listar endereços'), ['action' => 'index', 'controller' => 'Enderecos']) ?></li>
        <li><?= $this->Html->link(__('Listar bairros'), ['action' => 'index', 'controller' => 'Bairros']) ?></li>
        <li><?= $this->Html->link(__('Listar cidades'), ['action' => 'index', 'controller' => 'Cidades']) ?></li>
        <li><?= $this->Html->link(__('Listar estados'), ['action' => 'index', 'controller' => 'Estados']) ?></li>
        <hr>
        <li><?= $this->Html->link(__('<< Voltar'), ['controller' => 'Bairros', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bairro form large-9 medium-8 columns content">
    <?= $this->Form->create($bairro) ?>
    <fieldset>
        <legend><?= __('Editar Bairro') ?></legend>
        <?php
            echo $this->Form->control('nome_bairro');
            echo $this->Form->control('cidade_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
