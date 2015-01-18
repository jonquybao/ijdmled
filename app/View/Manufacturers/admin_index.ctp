<h2>Manufacturers</h2>

<table class="table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('image'); ?></th>
		<th><?php echo $this->Paginator->sort('active'); ?></th>
		<th class="actions">Actions</th>
	</tr>
	<?php foreach ($manufacturers as $manufacturer): ?>
	<tr>
		<td><?php echo h($manufacturer['Manufacturer']['id']); ?></td>
		<td><?php echo h($manufacturer['Manufacturer']['name']); ?></td>
		<td><?php echo h($manufacturer['Manufacturer']['image']); ?></td>
		<td><?php echo h($manufacturer['Manufacturer']['active']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $manufacturer['Manufacturer']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $manufacturer['Manufacturer']['id']), array('class' => 'btn btn-default btn-xs')); ?>
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

<br />

<?php echo $this->Html->link('New Manufacturer', array('action' => 'add'), array('class' => 'btn btn-default')); ?>

<br />
<br />