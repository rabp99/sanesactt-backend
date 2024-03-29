<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoServicio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoServicio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipo Servicios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoServicios form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoServicio) ?>
    <fieldset>
        <legend><?= __('Edit Tipo Servicio') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
