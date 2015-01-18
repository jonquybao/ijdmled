<h2>Order Items</h2>

<table class="table-striped table-bordered table-condensed table-hover">
	<tr>

		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('order_id'); ?></th>
		<th><?php echo $this->Paginator->sort('product_id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('quantity'); ?></th>
		<th><?php echo $this->Paginator->sort('weight'); ?></th>
		<th><?php echo $this->Paginator->sort('price'); ?></th>
		<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
		<th><?php echo $this->Paginator->sort('created '); ?></th>
		<th><?php echo $this->Paginator->sort('modified'); ?></th>
		
		<th>Actions</th>
	</tr>
	<?php foreach ($orderitems as $orderitem): ?>
	<tr>
		<td><?php echo h($orderitem['OrderItem']['id']); ?></td>
		<td><?php echo h($orderitem['OrderItem']['order_id']); ?></td>
		<td><?php echo h($orderitem['OrderItem']['product_id']); ?></td>
		<td><?php echo h($orderitem['OrderItem']['name']); ?></td>
		<td><?php echo h($orderitem['OrderItem']['quantity']); ?></td>
		<td><?php echo h($orderitem['OrderItem']['weight']); ?></td>
		<td><?php echo h($orderitem['OrderItem']['price']); ?></td>
		<td><?php echo h($orderitem['OrderItem']['subtotal']); ?></td>
		<td><?php echo h($orderitem['OrderItem']['created']); ?></td>
		<td><?php echo h($orderitem['OrderItem']['modified']); ?></td>
		
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $orderitem['OrderItem']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $orderitem['OrderItem']['id']), array('class' => 'btn btn-default btn-xs')); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<br />

<?php echo $this->element('pagination-counter'); ?>

<?php echo $this->element('pagination'); ?>

<br />
<br />
