<?php
$this->Html->addCrumb('Positions', '/positions/');
foreach ($parents as $parent) {
	$this->Html->addCrumb($parent['Position']['name'], '/position/' . $parent['Position']['slug']);
}
?>

<h2><?php echo $position['Position']['name']; ?><small> Position</small></h1>

<?php if (!empty($products)): ?>

<?php echo $this->element('products'); ?>

<?php endif; ?>