<h2>Manufacturers</h2>

<?php $this->Html->addCrumb('Manufacturers'); ?>

<?php echo $this->Tree->generate($manufacturers, array('element' => 'manufacturers/tree_item', 'class' => 'manufacturertree', 'id' => 'manufacturertree')); ?>