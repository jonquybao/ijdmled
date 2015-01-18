<h2>Category</h2>

<table class="table-striped table-bordered table-condensed table-hover">
	<tr>
		<td>Id</td>
		<td><?php echo h($ledcategory['Ledcategory']['id']); ?></td>
	</tr>
	<tr>
		<td>Size</td>
		<td><?php echo h($ledcategory['Ledcategory']['name']); ?></td>
	</tr>
</table>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link('Edit Ledcategory', array('action' => 'edit', $ledcategory['Ledcategory']['id']), array('class' => 'btn btn-default')); ?> </li>

<br />
<br />

<?php //echo $this->Form->postLink('Delete Brand', array('action' => 'delete', $brand['Brand']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $brand['Brand']['id'])); ?>

<br />
<br />
