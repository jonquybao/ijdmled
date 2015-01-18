<h2>Product</h2>

<table class="table-striped table-bordered table-condensed table-hover">
	<tr>
		<td>Id</td>
		<td><?php echo h($product['Product']['id']); ?></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo h($product['Product']['name']); ?></td>
	</tr>
    <tr>
		<td>Ledcategory</td>
		<td><?php echo h($product['Ledcategory']['name']); ?></td>
	</tr> 
	<tr>
		<td>Manufacturer</td>
		<td><?php echo h($product['Manufacturer']['name']); ?></td>
	</tr>
	<tr>
		<td>Bulbsize</td>
		<td><?php echo h($product['Bulbsize']['name']); ?></td>
	</tr>
	<tr>
		<td>Position</td>
		<td><?php echo h($product['Position']['name']); ?></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><?php echo h($product['Product']['description']); ?></td>
	</tr>
	<tr>
		<td>Image</td>
		<td><?php echo h($product['Product']['image']); ?></td>
	</tr>
	<tr>
		<td>Price</td>
		<td><?php echo h($product['Product']['price']); ?></td>
	</tr>
	<!--<tr>
		<td>Weight</td>
		<td><?php echo h($product['Product']['weight']); ?></td>
	</tr>---->
	<tr>
		<td>Active</td>
		<td><?php echo $this->Html->link($this->Html->image('icon_' . $product['Product']['active'] . '.png'), array('controller' => 'products', 'action' => 'switch', 'active', $product['Product']['id']), array('class' => 'status', 'escape' => false)); ?></td>
	</tr>
	<tr>
		<td>Created</td>
		<td><?php echo h($product['Product']['created']); ?></td>
	</tr>
	<tr>
		<td>Modified</td>
		<td><?php echo h($product['Product']['modified']); ?></td>
	</tr>
</table>

<?php echo $this->Html->Image('/images/small/' . $product['Product']['image'], array('alt' => $product['Product']['name'], 'class' => 'image')); ?>

<br />
<br />

<?php echo $this->Html->Image('/images/large/' . $product['Product']['image'], array('alt' => $product['Product']['name'], 'class' => 'image')); ?>

<br />
<br />

<div style="padding:20px;">
<h3>Upload Image</h3>
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
<?php echo $this->Form->input('id', array('value' => $product['Product']['id'])); ?>
<?php echo $this->Form->input('slug', array('type' => 'hidden', 'value' => $product['Product']['slug'])); ?>
<div class="row">
	<div class="span3">
	<?php echo $this->Form->input('image', array('type' => 'file')); ?>
	</div>

</div>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>

</div>



<div style="padding:20px;">
<h3>Upload Sub Image 1</h3>
<?php echo $this->Html->Image('/images/small/' . $product['Product']['subimage_1'], array('alt' => $product['Product']['name'], 'class' => 'image')); ?>
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
<?php echo $this->Form->input('id', array('value' => $product['Product']['id'])); ?>
<?php echo $this->Form->input('slug', array('type' => 'hidden', 'value' => $product['Product']['slug'])); ?>
<div class="row">
	<div class="span3">
	<?php echo $this->Form->input('subimage_1', array('type' => 'file')); ?>
	</div>
</div>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>




<div style="padding:20px;">
<h3>Upload Sub Image 2</h3>
<?php echo $this->Html->Image('/images/small/' . $product['Product']['subimage_2'], array('alt' => $product['Product']['name'], 'class' => 'image')); ?>
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
<?php echo $this->Form->input('id', array('value' => $product['Product']['id'])); ?>
<?php echo $this->Form->input('slug', array('type' => 'hidden', 'value' => $product['Product']['slug'])); ?>
<div class="row">
	<div class="span3">
	<?php echo $this->Form->input('subimage_2', array('type' => 'file')); ?>
	</div>
</div>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>


<div style="padding:20px;">
<h3>Upload Sub Image 3</h3>
<?php echo $this->Html->Image('/images/small/' . $product['Product']['subimage_3'], array('alt' => $product['Product']['name'], 'class' => 'image')); ?>
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
<?php echo $this->Form->input('id', array('value' => $product['Product']['id'])); ?>
<?php echo $this->Form->input('slug', array('type' => 'hidden', 'value' => $product['Product']['slug'])); ?>
<div class="row">
	<div class="span3">
	<?php echo $this->Form->input('subimage_3', array('type' => 'file')); ?>
	</div>
</div>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>



<div style="padding:20px;">
<h3>Upload Sub Image 4</h3>
<?php echo $this->Html->Image('/images/small/' . $product['Product']['subimage_4'], array('alt' => $product['Product']['name'], 'class' => 'image')); ?>
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
<?php echo $this->Form->input('id', array('value' => $product['Product']['id'])); ?>
<?php echo $this->Form->input('slug', array('type' => 'hidden', 'value' => $product['Product']['slug'])); ?>
<div class="row">
	<div class="span3">
	<?php echo $this->Form->input('subimage_4', array('type' => 'file')); ?>
	</div>
</div>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>



<div style="padding:20px;">
<h3>Upload Sub Image 5</h3>
<?php echo $this->Html->Image('/images/small/' . $product['Product']['subimage_5'], array('alt' => $product['Product']['name'], 'class' => 'image')); ?>
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
<?php echo $this->Form->input('id', array('value' => $product['Product']['id'])); ?>
<?php echo $this->Form->input('slug', array('type' => 'hidden', 'value' => $product['Product']['slug'])); ?>
<div class="row">
	<div class="span3">
	<?php echo $this->Form->input('subimage_5', array('type' => 'file')); ?>
	</div>
</div>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>




<div style="padding:20px;">
<h3>Upload Sub Image 6</h3>
<?php echo $this->Html->Image('/images/small/' . $product['Product']['subimage_6'], array('alt' => $product['Product']['name'], 'class' => 'image')); ?>
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
<?php echo $this->Form->input('id', array('value' => $product['Product']['id'])); ?>
<?php echo $this->Form->input('slug', array('type' => 'hidden', 'value' => $product['Product']['slug'])); ?>
<div class="row">
	<div class="span3">
	<?php echo $this->Form->input('subimage_6', array('type' => 'file')); ?>
	</div>
</div>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>





<div style="padding:20px;">
<h3>Upload Sub Image 7</h3>
<?php echo $this->Html->Image('/images/small/' . $product['Product']['subimage_7'], array('alt' => $product['Product']['name'], 'class' => 'image')); ?>
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
<?php echo $this->Form->input('id', array('value' => $product['Product']['id'])); ?>
<?php echo $this->Form->input('slug', array('type' => 'hidden', 'value' => $product['Product']['slug'])); ?>
<div class="row">
	<div class="span3">
	<?php echo $this->Form->input('subimage_7', array('type' => 'file')); ?>
	</div>
</div>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>





<br />
<br />

<br />
<br />


<h3>Actions</h3>

<?php echo $this->Html->link('Edit Product', array('action' => 'edit', $product['Product']['id']), array('class' => 'btn btn-default')); ?>

<br />
<br />

<?php echo $this->Form->postLink('Delete Product', array('action' => 'delete', $product['Product']['id']), array('class' => 'btn btn-danger'), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>

<br />
<br />

