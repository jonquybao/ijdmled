<b>Order Number:  10-12815-97120747 Has Shipped!</b>
<br>
Tracking Number: 61299998613442540957<br>
Shipping Method: USPS First Class<br>
<br><br>

<b>Order:</b>
<br>
First Name: <?php echo $shop['Order']['first_name'];?><br>

Last Name: <?php echo $shop['Order']['last_name'];?><br>

Email: <?php echo $shop['Order']['email'];?><br>

Phone: <?php echo $shop['Order']['phone'];?><br>
<br><br>

<b>Billing Address: </b>
<br>

 <?php echo $shop['Order']['billing_address'];?><br>
 <?php echo $shop['Order']['billing_city'];?>, <?php echo $shop['Order']['billing_state'];?><br>
 <?php echo $shop['Order']['billing_zip'];?>, <?php echo $shop['Order']['billing_country'];?><br>

<br><br>
<b>Shipping Address:</b><br>

 <?php echo $shop['Order']['shipping_address'];?> <br>
 <?php echo $shop['Order']['shipping_city'];?>, <?php echo $shop['Order']['shipping_state'];?><br>
 <?php echo $shop['Order']['shipping_zip'];?>, <?php echo $shop['Order']['shipping_country'];?><br>

<hr>
<br>
<b>Order Details:</b>
<br>
<table border="0" style="padding:0px;">
	<tr>
		<td style="padding:10px;padding-left:0px;"><b>Description</b></td>
		<td style="padding:10px;"><b>Color</b></td>
		<td style="padding:10px;"><b>Item Price</b></td>
		<td style="padding:10px;"><b>Quantity</b></td>
		<td style="padding:10px;"><b>Extended Price</b></td>
	</tr>
	<tr>
		

		<?php foreach ($shop['OrderItem'] as $orderitem): ?>

		<td style="padding:10px;padding-left:0px;"><?php echo $orderitem['Product']['name']; ?>	</td>
		<td style="padding:10px;"><?php echo $orderitem['color']; ?>	</td>
		<td style="padding:10px;">$<?php echo $orderitem['Product']['price']; ?>	</td>
		<td style="padding:10px;"><?php echo $orderitem['quantity']; ?></td>
		<td style="padding:10px;">$<?php echo $orderitem['subtotal']; ?></td>

					
<?php endforeach; ?>
	</tr>

</table>
<br><br>

<b>Items:	</b><?php echo $shop['Order']['quantity'];?><br>

<b>Total:</b>	$<?php echo $shop['Order']['total'];?><br>
<br>
<p>
	This email was sent from a notification only address.  Please do not reply to this message as the mailbox is unattended. To contact us, please send to requests to sales@ijdmled.com 
</p>
<br>
<p>
	This email is being sent to <?php echo $shop['Order']['email'];?> from iJDMled.com. 
</p>
<hr>

<?php //print_r($shop); ?>



