
<h2>Manufacturer</h2>

<table>
	<tr>
		<td>Id</td>
		<td><?php echo h($manufacturer['Manufacturer']['id']); ?></td>
	</tr>
	<tr>
		<td>Lft</td>
		<td><?php echo h($manufacturer['Manufacturer']['image']); ?></td>
	</tr>
	<tr>
		<td>Rght</td>
		<td><?php echo h($manufacturer['Manufacturer']['active']); ?></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo h($manufacturer['Manufacturer']['name']); ?></td>
	</tr>

</table>

<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('Edit Manufacturer', array('action' => 'edit', $manufacturer['Manufacturer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink('Delete Manufacturer', array('action' => 'delete', $manufacturer['Manufacturer']['id']), null, __('Are you sure you want to delete # %s?', $manufacturer['Manufacturer']['id'])); ?> </li>
		<li><?php echo $this->Html->link('List Manufacturers', array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Manufacturer', array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link('List Manufacturers', array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Parent Manufacturer', array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link('List Products', array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Product', array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3>Related Manufacturers</h3>
	<?php if (!empty($manufacturer['ChildManufacturer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>image</th>
		<th>active</th>
		<th class="actions">Actions</th>
	</tr>
	<?php
		$i = 0;
		foreach ($manufacturer['ChildManufacturer'] as $childManufacturer): ?>
		<tr>
			<td><?php echo $childManufacturer['id']; ?></td>
			<td><?php echo $childManufacturer['name']; ?></td>
			<td><?php echo $childManufacturer['image']; ?></td>
			<td><?php echo $childManufacturer['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('View', array('controller' => 'manufacturers', 'action' => 'view', $childManufacturer['id'])); ?>
				<?php echo $this->Html->link('Edit', array('controller' => 'manufacturers', 'action' => 'edit', $childManufacturer['id'])); ?>
				<?php echo $this->Form->postLink('Delete', array('controller' => 'manufacturers', 'action' => 'delete', $childManufacturer['id']), null, __('Are you sure you want to delete # %s?', $childManufacturer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link('New Child Manufacturer', array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3>Related Products</h3>
	<?php if (!empty($manufacturer['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Image</th>
			<th>Active</th>
			<th class="actions">Actions</th>
		</tr>
		<?php foreach ($manufacturer['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['image']; ?></td>
			<td><?php echo $product['active']; ?></td>
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

