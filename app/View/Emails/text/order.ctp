<b>Shop Order:</b>

First Name: <?php echo $shop['Order']['first_name'];?>

Last Name: <?php echo $shop['Order']['last_name'];?>

Email: <?php echo $shop['Order']['email'];?>

Phone: <?php echo $shop['Order']['phone'];?>


Billing Address: 

 <?php echo $shop['Order']['billing_address'];?>
 <?php echo $shop['Order']['billing_city'];?>, <?php echo $shop['Order']['billing_state'];?>
 <?php echo $shop['Order']['billing_zip'];?>, <?php echo $shop['Order']['billing_country'];?>


Shipping Address:

 <?php echo $shop['Order']['shipping_address'];?> 
 <?php echo $shop['Order']['shipping_city'];?>, <?php echo $shop['Order']['shipping_state'];?>
 <?php echo $shop['Order']['shipping_zip'];?>, <?php echo $shop['Order']['shipping_country'];?>



Description			Item Price			Quantity			Extended Price
<?php foreach ($shop['OrderItem'] as $orderitem): ?>
<?php echo $orderitem['Product']['name']; ?>			$<?php echo $orderitem['Product']['price']; ?>			<?php echo $orderitem['quantity']; ?>			$<?php echo $orderitem['subtotal']; ?>

<?php endforeach; ?>

Items:	<?php echo $shop['Order']['quantity'];?>

Total:	$<?php echo $shop['Order']['total'];?>




<?php //print_r($shop); ?>



