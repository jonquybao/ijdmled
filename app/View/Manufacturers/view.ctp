<?php
$this->Html->addCrumb('Manufacturers', '/manufacturers/');
foreach ($parents as $parent) {
	$this->Html->addCrumb($parent['Manufacturer']['name'], '/manufacturer/' . $parent['Manufacturer']['slug']);
}
?>

<h2><?php echo $manufacturer['Manufacturer']['name']; ?><small> Manufacturer</small></h1>

<?php if (!empty($products)): ?>

<?php echo $this->element('products'); ?>

<?php endif; ?>