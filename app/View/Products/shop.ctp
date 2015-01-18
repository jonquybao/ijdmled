<!---<p class="titleheader"><?php echo Configure::read('Settings.SHOP_TITLE'); ?> </p>---->
	


<table width="100%" border='0'>
	<tr >
		<td width="25%" valign="top">
		<div width="100%" style="background-color:black;color:white; height:50px; padding:5px;" onclick="minimize('c')" valign="center" >
				<h4 class="cattitle"> CATEGORY                     &#9650;</h4>
			</div>
			<div class="catexpand sidepanel">
			<?php foreach ($categories as $category): ?>
	
					
				<div width="100%" height="55px" id='<?php echo $category['Ledcategory']['name']; ?>'  class="sidepanelitem" >
					
							<a href="#"  class="link" onclick="send('<?php echo $category['Ledcategory']['id']; ?>','ledcategory','<?php echo $category['Ledcategory']['name']; ?>','http://www.zetaphirhotechnology.com/ijdmled/products/shop/ledcategory/<?php echo $category['Ledcategory']['id']; ?>')" style="padding-top:10px;">
								<h5><?php echo $category['Ledcategory']['name']; ?></h5>
							</a>
				</div>


			<?php endforeach; ?>
			</div>


			
			<div width="100%" style="background-color:black;color:white; height:50px; padding:5px;" onclick="minimize('m')" valign="center" >
				<h4 class="mantitle">MANUFACTURER                    &#9650;</h4>
			</div>

			<div class="manexpand sidepanel">
			<?php foreach ($manufacturers as $manufacturer): ?>
	
					
				<div width="100%" id='<?php echo $manufacturer['Manufacturer']['name']; ?>' height="55px" class="sidepanelitem">
						<span style="margin-left:10pxfloat:left;">
							<a href="#"  onclick="send('<?php echo $manufacturer['Manufacturer']['id']; ?>','manufacturer','<?php echo $manufacturer['Manufacturer']['name']; ?>','http://www.zetaphirhotechnology.com/ijdmled/products/shop/manufacturer/<?php echo $manufacturer['Manufacturer']['id']; ?>')" >
								<h5><?php echo $manufacturer['Manufacturer']['name']; ?></h5>
							</a>
				</div>

			<?php endforeach; ?>
			</div>



			<div width="100%" style="background-color:black;color:white; height:50px; padding:5px;" onclick="minimize('b')" valign="center" >
				<h4 class="bulbtitle">BULB SIZE                    &#9650;</h4>
			</div>

			<div class="bulbexpand sidepanel">
			<?php foreach ($bulbsizes as $bulbsize): ?>
	
					
				<div width="100%" id='<?php echo $bulbsize['Bulbsize']['size']; ?>' height="55px" class="sidepanelitem">
						<span style="margin-left:10pxfloat:left;">
							<a href="#"  onclick="send('<?php echo $bulbsize['Bulbsize']['id'];  ?>','bulbsize','<?php echo $bulbsize['Bulbsize']['size']; ?>','http://www.zetaphirhotechnology.com/ijdmled/products/shop/bulbsize/<?php echo $bulbsize['Bulbsize']['id']; ?>')" >
								<h5><?php echo $bulbsize['Bulbsize']['size'];  ?></h5>
							</a>
				</div>

			<?php endforeach; ?>
			</div>


			<div width="100%" style="background-color:black;color:white; height:50px; padding:5px;" onclick="minimize('p')" valign="center" >
				<h4 class="postitle">POSITION                    &#9650;</h4>
			</div>
			<div class="posexpand sidepanel">
			<?php foreach ($positions as $position): ?>
	
					
				<div width="100%" id='<?php echo $position['Position']['name']; ?>'  height="55px" class="sidepanelitem">
						<span style="margin-left:10pxfloat:left;">
							<a href="#" onclick="send('<?php echo $position['Position']['id'];  ?>','position','<?php echo $position['Position']['name']; ?>' ,'http://www.zetaphirhotechnology.com/ijdmled/products/shop/position/<?php echo $position['Position']['id']; ?>')" >
								<h5><?php echo $position['Position']['name'];  ?></h5>
							</a>
				</div>


			<?php endforeach; ?>
			</div>
				
			
		</td>
	
		<td width="75%" style="padding:20px;" align="center" valign="top" >
			<div  class="spin" style="width:100%;height:100%;position:relative; top:0; left:0;margin: 0px auto 0px auto">
				<!--	<img class="spin" src="<?php echo $this->webroot; ?>img/ajax-loader.gif" />---->
			</div>
			<div id="prodcontent">
			
			<?php echo $this->element('pagination'); ?>
			<!---<a href="#"  >30</a>/<a href="#"  >60</a>/<a href="#"  >90</a>/<a href="#"  >All</a>---->
			
			
			<?php echo $this->element('products'); ?>

			<?php echo $this->element('pagination-counter'); ?>

			<?php echo $this->element('pagination');
			?>
		

			</div>
			
		</td>
	</tr>
</table>



	
