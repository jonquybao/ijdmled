<h2>Admin Add Category</h2>

<?php echo $this->Form->create('Ledcategory'); ?>
<?php echo $this->Form->input('name'); ?>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
