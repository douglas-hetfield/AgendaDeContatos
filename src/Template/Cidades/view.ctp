<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cidade $cidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opções') ?></li>
        <li><?= $this->Html->link(__('Editar Cidade'), ['action' => 'edit', $cidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Cidade'), ['action' => 'delete', $cidade->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $cidade->nome_cidade)]) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Cidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('<< Voltar'), ['controller' => 'Cidades', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="cidade view large-9 medium-8 columns content">
    <h3><?= h($cidade->nome_cidade) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Cidade') ?></th>
            <td><?= h($cidade->nome_cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cidade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $this->Number->format($cidade->estado_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($cidade->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado') ?></th>
            <td><?= h($cidade->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Bairros da cidade '.$cidade->nome_cidade) ?></h4>
        <?php if (!empty($cidade->bairros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Nome Bairro') ?></th>
                <th scope="col"><?= __('Cidade') ?></th>
                <th scope="col"><?= __('Criado') ?></th>
                <th scope="col"><?= __('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($cidade->bairros as $bairro): ?>
            <tr>
                <td><?= h($bairro->nome_bairro) ?></td>
                <td><?= h($bairro->cidade_id) ?></td>
                <td><?= h($bairro->created) ?></td>
                <td><?= h($bairro->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Mais'), ['controller' => 'Bairros', 'action' => 'view', $bairro->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
