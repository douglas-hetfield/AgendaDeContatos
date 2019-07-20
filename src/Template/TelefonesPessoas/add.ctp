<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TelefonesPessoa $telefonesPessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('<< Voltar'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="telefonesPessoas form large-9 medium-8 columns content">
    <?= $this->Form->create($telefonesPessoa) ?>
    <fieldset>
        <legend><?= __('Adicionar número') ?></legend>
        <?php
            echo $this->Form->control('numero');
            echo $this->Form->control('pessoa_id', ['options' => $pessoas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
