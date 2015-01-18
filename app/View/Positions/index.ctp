<h2>Positions</h2>

<?php $this->Html->addCrumb('Positions'); ?>

<?php echo $this->Tree->generate($positions, array('element' => 'positions/tree_item', 'class' => 'positiontree', 'id' => 'positiontree')); ?>