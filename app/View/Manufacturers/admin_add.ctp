<h2>Admin Add Manufacturer</h2>

<?php echo $this->Form->create('Manufacturer'); ?>

<?php echo $this->Form->input('image'); ?>
<?php echo $this->Form->input('active'); ?>
<?php echo $this->Form->input('name'); ?>

<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />
