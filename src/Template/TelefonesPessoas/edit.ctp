<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TelefonesPessoa $telefonesPessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $telefonesPessoa->id],
                ['confirm' => __('Tem certeza que deseja deletar {0}?', $telefonesPessoa->id)]
            )
        ?></li>
        
        <li><?= $this->Html->link(__('<< Voltar'), ['controller' => 'Pessoas', 'action' => 'view', $telefonesPessoa->pessoa_id]) ?></li>
    </ul>
</nav>
<div class="telefonesPessoas form large-9 medium-8 columns content">
    <?= $this->Form->create($telefonesPessoa) ?>
    <fieldset>
        <legend><?= __('Editar número') ?></legend>
        <?php
            echo $this->Form->control('numero');
            echo $this->Form->control('pessoa_id', ['options' => $pessoas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
