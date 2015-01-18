<h2>Categories</h2>

<table class="table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th class="actions">Actions</th>
	</tr>
	<?php foreach ($ledcategories as $ledcategory): ?>
	<tr>
		<td><?php echo h($ledcategory['Ledcategory']['id']); ?></td>
			<td><?php echo h($ledcategory['Ledcategory']['name']); ?></td>
		<td class="actions">
		<?php echo $this->Html->link('View', array('action' => 'view', $ledcategory['Ledcategory']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $ledcategory['Ledcategory']['id']), array('class' => 'btn btn-default btn-xs')); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />

<h3>Actions</h3>

<?php echo $this->Html->link('New Ledcategory', array('action' => 'add'), array('class' => 'btn btn-default')); ?>

<br />
<br />