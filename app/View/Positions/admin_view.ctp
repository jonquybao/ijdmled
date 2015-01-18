
<h2>Position</h2>

<table>
	<tr>
		<td>Id</td>
		<td><?php echo h($position['Position']['id']); ?></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo h($position['Position']['name']); ?></td>
	</tr>
</table>

<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('Edit Position', array('action' => 'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink('Delete Position', array('action' => 'delete', $position['Position']['id']), null, __('Are you sure you want to delete # %s?', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Html->link('List Positions', array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Position', array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link('List Positions', array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Parent Position', array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link('List Products', array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Product', array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3>Related Positions</h3>
	<?php if (!empty($position['ChildPosition'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th class="actions">Actions</th>
	</tr>
	<?php
		$i = 0;
		foreach ($position['ChildPosition'] as $childPosition): ?>
		<tr>
			<td><?php echo $childPosition['id']; ?></td>
			<td><?php echo $childPosition['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('View', array('controller' => 'positions', 'action' => 'view', $childPosition['id'])); ?>
				<?php echo $this->Html->link('Edit', array('controller' => 'positions', 'action' => 'edit', $childPosition['id'])); ?>
				<?php echo $this->Form->postLink('Delete', array('controller' => 'positions', 'action' => 'delete', $childPosition['id']), null, __('Are you sure you want to delete # %s?', $childPosition['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link('New Child Position', array('controller' => 'positions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3>Related Products</h3>
	<?php if (!empty($position['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th class="actions">Actions</th>
		</tr>
		<?php foreach ($position['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('View', array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link('Edit', array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
<?php endif; ?>

<div class="actions">
	<ul>
		<li><?php echo $this->Html->link('New Product', array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>

