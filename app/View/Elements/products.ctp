<div class="row">
<?php
$i = 0;
foreach ($products as $product):
$i++;
if (($i % 3) == 0) { echo "\n<div class=\"row\">\n\n";}
?>
<div class="col col-sm-4">
<?php echo $this->Html->image('/images/small/' . $product['Product']['image'], array('url' => array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['slug']), 'alt' => $product['Product']['name'], 'width' => 200, 'height' => 200, 'class' => 'image')); ?>
<br />
<?php echo $this->Html->link($product['Product']['name'], array('controller' => 'products', 'action' => 'view', 'slug' => $product['Product']['slug'])); ?>
<br />
$<?php echo $product['Product']['price']; ?>
<br />
<br />

</div>
<?php
if (($i % 3) == 0) { echo "\n</div>\n\n";}
endforeach;
?>

<br />
<br />

</div>
