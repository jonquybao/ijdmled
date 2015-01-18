<h2>Admin Add Bulbesize</h2>

<?php echo $this->Form->create('Bulbsize'); ?>
<?php echo $this->Form->input('size'); ?>
<?php echo $this->Form->input('name'); ?>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
