<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagina $pagina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pagina->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pagina->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paginas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paginas form large-9 medium-8 columns content">
    <?= $this->Form->create($pagina) ?>
    <fieldset>
        <legend><?= __('Edit Pagina') ?></legend>
        <?php
            echo $this->Form->control('identificador');
            echo $this->Form->control('nome');
            echo $this->Form->control('conteudo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
