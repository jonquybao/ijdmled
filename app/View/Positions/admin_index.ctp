<h2>Positions</h2>

<table class="table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>

		<th class="actions">Actions</th>
	</tr>
	<?php foreach ($positions as $position): ?>
	<tr>
		<td><?php echo h($position['Position']['id']); ?></td>
		<td><?php echo h($position['Position']['name']); ?></td>
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $position['Position']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $position['Position']['id']), array('class' => 'btn btn-default btn-xs')); ?>
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

<?php echo $this->Html->link('New Position', array('action' => 'add'), array('class' => 'btn btn-default')); ?>

<br />
<br />