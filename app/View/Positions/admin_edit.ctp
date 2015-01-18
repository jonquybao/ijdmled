<h2>Admin Edit Position</h2>

<?php echo $this->Form->create('Position'); ?>
<?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->input('name'); ?>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Position.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Position.id'))); ?>

<br />
<br />
