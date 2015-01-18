<h2>Bulb Sizes</h2>

<table class="table-striped table-bordered table-condensed table-hover">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('size'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th class="actions">Actions</th>
	</tr>
	<?php foreach ($bulbsizes as $bulbsize): ?>
	<tr>
		<td><?php echo h($bulbsize['Bulbsize']['id']); ?></td>
		<td><?php echo h($bulbsize['Bulbsize']['size']); ?></td>
			<td><?php echo h($bulbsize['Bulbsize']['name']); ?></td>
		<td class="actions">
		<?php echo $this->Html->link('View', array('action' => 'view', $bulbsize['Bulbsize']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $bulbsize['Bulbsize']['id']), array('class' => 'btn btn-default btn-xs')); ?>
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

<?php echo $this->Html->link('New Bulbsize', array('action' => 'add'), array('class' => 'btn btn-default')); ?>

<br />
<br />