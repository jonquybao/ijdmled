<h2>Admin Edit Manufacturer</h2>

<?php echo $this->Form->create('Manufacturer'); ?>
<?php echo $this->Form->input('id'); ?>
<?php echo $this->Form->input('image'); ?>
<?php echo $this->Form->input('active'); ?>
<?php echo $this->Form->input('name'); ?>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $this->Form->value('Manufacturer.id')), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $this->Form->value('Manufacturer.id'))); ?>

<br />
<br />
