<div style="padding:20px;">
<?php echo $this->set('title_for_layout', 'Order Review'); ?>

<?php $this->Html->addCrumb('Order Review'); ?>

<?php echo $this->Html->script(array('shop_review.js'), array('inline' => false)); ?>

<style type="text/css">
	#ccbox {
		background: transparent url("<?php echo $this->webroot; ?>img/cards.png");
		margin: 0 0 10px 0;
		padding: 0 0 0 150px;
		width: 0;
		height: 23px;
		overflow: hidden;
	}
</style>

<h1>Order Review</h1>

<hr>

<div class="row">
<div class="col col-sm-4">

<b>First Name:</b> <?php echo $shop['Order']['first_name'];?><br />
<b>Last Name:</b>  <?php echo $shop['Order']['last_name'];?><br />
<b>Email:</b>  <?php echo $shop['Order']['email'];?><br />
<b>Phone:</b>  <?php echo $shop['Order']['phone'];?><br />

<br />

</div>
<div class="col col-sm-4">

<b>Billing Address:</b> <br> <?php echo $shop['Order']['billing_address'];?>, <br />
<?php echo $shop['Order']['billing_city'];?>, <?php echo $shop['Order']['billing_state'];?><br />
<?php echo $shop['Order']['billing_zip'];?>, <?php echo $shop['Order']['billing_country'];?><br />

<br />

</div>
<div class="col col-sm-4">

<b>Shipping Address:</b> <br> <?php echo $shop['Order']['shipping_address'];?><br />
 <?php echo $shop['Order']['shipping_city'];?>, <?php echo $shop['Order']['shipping_state'];?><br />
<?php echo $shop['Order']['shipping_zip'];?>, <?php echo $shop['Order']['shipping_country'];?><br />

<br />

</div>
</div>

<hr>

<div class="row">
<div class="col col-sm-1">#</div>
<div class="col col-sm-6">ITEM</div>
<div class="col col-sm-1">COLOR</div>
<div class="col col-sm-1">PRICE</div>
<div class="col col-sm-1" style="text-align: right;">QUANTITY</div>
<div class="col col-sm-1" style="text-align: right;">SUBTOTAL</div>
</div>

<br />
<br />

<?php foreach ($shop['OrderItem'] as $item): ?>
<div class="row">
<div class="col col-sm-1"><?php echo $this->Html->image('/images/small/' . $item['Product']['image'], array('height' => 60, 'class' => 'px60')); ?></div>
<div class="col col-sm-6"><?php echo $item['Product']['name']; ?></div>
<div class="col col-sm-1">
	<?php 
										
									
										
											    if($item["color"]== "white"){
													echo "<div class=\"col-md-2 white-option\" ><a href=\"#\"  onclick=\"color_options('white')\" ><div id='white-border' style='height:30px; width:30px; border-style: solid; background:white; border-width:2px;'></div></a></div>";
													
												}else if($item["color"] == "blue"){
													echo "<div  class=\"col-md-2 blue-option\" ><a href=\"#\"  onclick=\"color_options('blue')\" ><div id='blue-border' style='height:30px; width:30px; border-style: solid; background:blue; border-width:2px;'></div></a></div>";
													
												}
											
											

									?>

</div>
<div class="col col-sm-1">$<?php echo $item['Product']['price']; ?></div>
<div class="col col-sm-1" style="text-align: right;"><?php echo $item['quantity']; ?></div>
<div class="col col-sm-1" style="text-align: right;">$<?php echo $item['subtotal']; ?></div>
</div>
<?php endforeach; ?>

<hr>

<div class="row">
	<div class="col col-sm-10">Products: <?php echo $shop['Order']['order_item_count']; ?></div>
	<div class="col col-sm-1" style="text-align: right;">Items: <?php echo $shop['Order']['quantity']; ?></div>
	<div class="col col-sm-1" style="text-align: right;">Total<br /><strong>$<?php echo $shop['Order']['total']; ?></strong></div>
</div>

<hr>

<br />
<br />

<?php echo $this->Form->create('Order'); ?>

<?php if($shop['Order']['order_type'] == 'creditcard'): ?>

<div id="ccbox">
	Credit Card Type.
</div>

<div class="row">
	<div class="col col-sm-3">
		<?php echo $this->Form->input('creditcard_number', array('class' => 'form-control ccinput', 'maxLength' => 16, 'autocomplete' => 'off')); ?>
	</div>
</div>

<br />

<div class="row">
	<div class="col col-sm-2">
		<?php echo $this->Form->input('creditcard_month', array(
			'label' => 'Expiration Month',
			'class' => 'form-control',
			'options' => array(
				'01' => '01 - January',
				'02' => '02 - February',
				'03' => '03 - March',
				'04' => '04 - April',
				'05' => '05 - May',
				'06' => '06 - June',
				'07' => '07 - July',
				'08' => '08 - August',
				'09' => '09 - September',
				'10' => '10 - October',
				'11' => '11 - November',
				'12' => '12 - December'
			)
		)); ?>
	</div>
	<div class="col col-sm-2">
		<?php echo $this->Form->input('creditcard_year', array(
			'label' => 'Expiration Year',
			'class' => 'form-control',
			'options' => array(
				'13' => '2013',
				'14' => '2014',
				'15' => '2015',
				'16' => '2016',
				'17' => '2017',
				'18' => '2018',
				'19' => '2019',
				'20' => '2020',
				'21' => '2021',
				'22' => '2022',
			)
		));?>
	</div>
</div>

<br />

<div class="row">
	<div class="col col-sm-2">
		<?php echo $this->Form->input('creditcard_code', array('label' => 'Card Security Code', 'class' => 'form-control', 'maxLength' => 4)); ?>
	</div>
</div>

<br />

<?php endif; ?>

<div class="alert alert-danger">
	<strong>ATTENTION: THIS IS A DEMO SHOPPING CART !</strong>
</div>

<?php echo $this->Form->button('Submit Order', array('class' => 'btn btn-primary', 'ecape' => false)); ?>

<?php echo $this->Form->end(); ?>

<br />
<br />
</div>

