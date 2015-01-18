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
	
		<td width="75%"  valign="top" >
			<div  class="spin" style="width:100%;height:100%;position:relative; top:0; left:0;margin: 0px auto 0px auto">
				<!--	<img class="spin" src="<?php echo $this->webroot; ?>img/ajax-loader.gif" />---->
			</div>
			<div id="prodcontent" style="padding:20px;">
							<?php echo $this->Html->script(array('addtocart.js'), array('inline' => false)); ?>

							<?php
							$this->Html->addCrumb($product['Brand']['name'], array('controller' => 'brands', 'action' => 'view', 'slug' => $product['Brand']['slug']));
							$this->Html->addCrumb($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', 'slug' => $product['Category']['slug']));
							$this->Html->addCrumb($product['Product']['name']);
							?>

							<!---<h1><?php echo $product['Product']['name']; ?></h1>---->
							<script>
							$( document ).ready(function() {
										$("#image_1").show();
										$("#image_2").hide();
										$("#image_3").hide();
										$("#image_4").hide();
										$("#image_5").hide();
										$("#image_6").hide();
										$("#image_7").hide();
										$("#image_8").hide();
										$( "#option_1" ).click(function(e) {
											 e.preventDefault();
											$("#image_1").show();
											$("#image_2").hide();
											$("#image_3").hide();
											("#image_4").hide();
											$("#image_5").hide();
											$("#image_6").hide();
											$("#image_7").hide();
											$("#image_8").hide();
										});
										$( "#option_2" ).click(function(e) {
												 e.preventDefault();
											$("#image_1").hide();
											$("#image_2").show();
											$("#image_3").hide();
											("#image_4").hide();
											$("#image_5").hide();
											$("#image_6").hide();
											$("#image_7").hide();
											$("#image_8").hide();
										});
										$( "#option_3" ).click(function(e) {
												 e.preventDefault();
											$("#image_1").hide();
											$("#image_2").hide();
											$("#image_3").show();
											$("#image_4").hide();
											$("#image_5").hide();
											$("#image_6").hide();
											$("#image_7").hide();
											$("#image_8").hide();
										});
										$( "#option_4" ).click(function(e) {
												 e.preventDefault();
											$("#image_1").hide();
											$("#image_2").hide();
											$("#image_3").hide();
											$("#image_4").show();
											$("#image_5").hide();
											$("#image_6").hide();
											$("#image_7").hide();
											$("#image_8").hide();
										});
										$( "#option_5" ).click(function(e) {
												 e.preventDefault();
											$("#image_1").hide();
											$("#image_2").hide();
											$("#image_3").hide();
											$("#image_4").hide();
											$("#image_5").show();
											$("#image_6").hide();
											$("#image_7").hide();
											$("#image_8").hide();
										});
										$( "#option_6" ).click(function(e) {
												 e.preventDefault();
											$("#image_1").hide();
											$("#image_2").hide();
												$("#image_3").hide();
											$("#image_4").hide();
											$("#image_5").hide();
											$("#image_6").show();
											$("#image_7").hide();
											$("#image_8").hide();
										});
										$( "#option_7" ).click(function(e) {
												 e.preventDefault();
											$("#image_1").hide();
											$("#image_2").hide();
											$("#image_3").hide();
											$("#image_4").hide();
											$("#image_5").hide();
											$("#image_6").hide();
											$("#image_7").show();
											$("#image_8").hide();
										});
										$( "#option_8" ).click(function(e) {
												 e.preventDefault();
											$("#image_1").hide();
											$("#image_2").hide();
											$("#image_3").hide();
											$("#image_4").hide();
											$("#image_5").hide();
											$("#image_6").hide();
											$("#image_7").hide();
											$("#image_8").show();
										});
								});
						
							</script>

							<div class="row">

								<div class="col col-sm-7">
								<?php echo $this->Html->Image('/images/large/' . $product['Product']['image'], array('alt' => $product['Product']['name'], 'class' => 'img-thumbnail img-responsive','id' => 'image_1')); ?>
								<?php echo $this->Html->Image('/images/large/' . $product['Product']['subimage_1'], array('alt' => $product['Product']['name'], 'class' => 'img-thumbnail img-responsive','id' => 'image_2')); ?>
								<?php echo $this->Html->Image('/images/large/' . $product['Product']['subimage_2'], array('alt' => $product['Product']['name'], 'class' => 'img-thumbnail img-responsive','id' => 'image_3')); ?>
										<?php echo $this->Html->Image('/images/large/' . $product['Product']['subimage_3'], array('alt' => $product['Product']['name'], 'class' => 'img-thumbnail img-responsive','id' => 'image_4')); ?>	
										<?php echo $this->Html->Image('/images/large/' . $product['Product']['subimage_4'], array('alt' => $product['Product']['name'], 'class' => 'img-thumbnail img-responsive','id' => 'image_5')); ?>
												<?php echo $this->Html->Image('/images/large/' . $product['Product']['subimage_5'], array('alt' => $product['Product']['name'], 'class' => 'img-thumbnail img-responsive','id' => 'image_6')); ?>
												<?php echo $this->Html->Image('/images/large/' . $product['Product']['subimage_6'], array('alt' => $product['Product']['name'], 'class' => 'img-thumbnail img-responsive','id' => 'image_7')); ?>
												<?php echo $this->Html->Image('/images/large/' . $product['Product']['subimage_7'], array('alt' => $product['Product']['name'], 'class' => 'img-thumbnail img-responsive','id' => 'image_8')); ?>
											
									<div class="row">

										<div class="col col-sm-3">
												<a href="#" id='option_1'><?php echo $this->Html->Image('/images/small/' . $product['Product']['image'], array('alt' => $product['Product']['subimage_1'], 'class' => 'img-thumbnail img-responsive','width' => '100px','height' => '100px', 'style' => 'margin-top:10px;')); ?></a>
										</div>

										<div class="col col-sm-3">
												<?php if( $product['Product']['subimage_1'] != '' ){
															echo '<a href="#" id="option_2">';

																 echo $this->Html->Image('/images/small/' . $product['Product']['subimage_1'], array('alt' => $product['Product']['subimage_2'], 'class' => 'img-thumbnail img-responsive','width' => '100px','height' => '100px', 'style' => 'margin-top:10px;')); 
																 echo "</a>";
														}
												?>
										</div>

										<div class="col col-sm-3">
												<?php if( $product['Product']['subimage_2'] != '' ){
															echo '<a href="#" id="option_3">';

																 echo $this->Html->Image('/images/small/' . $product['Product']['subimage_2'], array('alt' => $product['Product']['subimage_2'], 'class' => 'img-thumbnail img-responsive','width' => '100px','height' => '100px', 'style' => 'margin-top:10px;')); 
																 echo "</a>";
														}
												?>
										</div>
											<div class="col col-sm-3">
											<?php if( $product['Product']['subimage_3'] != '' ){
															echo '<a href="#" id="option_4">';

																 echo $this->Html->Image('/images/small/' . $product['Product']['subimage_3'], array('alt' => $product['Product']['subimage_3'], 'class' => 'img-thumbnail img-responsive','width' => '100px','height' => '100px', 'style' => 'margin-top:10px;')); 
																 echo "</a>";
														}
												?>
												
										</div>
										
									</div>
										<div class="row">

										<div class="col col-sm-3">
												<a href="#" id='option_5'><?php echo $this->Html->Image('/images/small/' . $product['Product']['subimage_4'], array('alt' => $product['Product']['subimage_4'], 'class' => 'img-thumbnail img-responsive','width' => '100px','height' => '100px', 'style' => 'margin-top:10px;')); ?></a>
										</div>

										<div class="col col-sm-3">
												<?php if( $product['Product']['subimage_5'] != '' ){
															echo '<a href="#" id="option_6">';

																 echo $this->Html->Image('/images/small/' . $product['Product']['subimage_5'], array('alt' => $product['Product']['subimage_5'], 'class' => 'img-thumbnail img-responsive','width' => '100px','height' => '100px', 'style' => 'margin-top:10px;')); 
																 echo "</a>";
														}
												?>
										</div>

										<div class="col col-sm-3">
												<?php if( $product['Product']['subimage_6'] != '' ){
															echo '<a href="#" id="option_7">';

																 echo $this->Html->Image('/images/small/' . $product['Product']['subimage_6'], array('alt' => $product['Product']['subimage_6'], 'class' => 'img-thumbnail img-responsive','width' => '100px','height' => '100px', 'style' => 'margin-top:10px;')); 
																 echo "</a>";
														}
												?>
										</div>
											<div class="col col-sm-3">
											<?php if( $product['Product']['subimage_7'] != '' ){
															echo '<a href="#" id="option_8">';

																 echo $this->Html->Image('/images/small/' . $product['Product']['subimage_7'], array('alt' => $product['Product']['subimage_7'], 'class' => 'img-thumbnail img-responsive','width' => '100px','height' => '100px', 'style' => 'margin-top:10px;')); 
																 echo "</a>";
														}
												?>
												
										</div>
										
									</div>

								</div>

								<div class="col col-sm-5">

									<strong><?php echo $product['Product']['name']; ?></strong>

									<br />
									<br />

									$ <?php echo $product['Product']['price']; ?>

									<br />
									<br />
							

									<?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'add'))); ?>
									<?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $product['Product']['id'])); ?>
									<b>QTY:</b> <input  type="text" value="1" name="quantity">
									<br>	<br>
									<input  type="hidden" value="white" name="color" id="color">
									  <div class="row">
									  	<script type="text/javascript">
									  		document.getElementById("white-border").style.borderWidth = "thick";
									  		function color_options(color){
									  			
									  				
									  			if(color =="white"){
									  				document.getElementById("color").value ="white";
									  				document.getElementById("white-border").style.borderWidth = "thick";
									  				document.getElementById("blue-border").style.borderWidth = "0px";
									  			}else{
									  				document.getElementById("color").value ="blue";	
													document.getElementById("white-border").style.borderWidth = "0px";
									  				document.getElementById("blue-border").style.borderWidth = "thick";
									  			}
									  		}
									  	</script>
									<?php 
										
											$colors = explode(",", $product['Product']['color_options']);
											if( count($colors) != 0){
												echo "<div><b>Select a color:</b></div><br>";
											}
											for ($x = 0; $x < count($colors); $x++) {
											    if($colors[$x] == "white"){
													echo "<div class=\"col-md-2 white-option\" ><a href=\"#\"  onclick=\"color_options('white')\" ><div id='white-border' style='height:50px; width:50px; border-style: solid; background:white; border-width:5px;'></div></a></div>";
													
												}else if($colors[$x] == "blue"){
													echo "<div  class=\"col-md-2 blue-option\" ><a href=\"#\"  onclick=\"color_options('blue')\" ><div id='blue-border' style='height:50px; width:50px; border-style: solid; background:blue; border-width:0px;'></div></a></div>";
													
												}
											} 
											

									?>
									</div>
									<br>	<br>
									<?php echo $this->Form->button('Add to Cart', array('class' => 'btn btn-primary ', 'id' => $product['Product']['id']));?>
									<?php echo $this->Form->end(); ?>
									<!--- find addtocart class ---->
										<br>

									<br />

								
									<br />
									<br />
									<script>
									$('#installimage').hide();
									function switchtabs(index){

									if(index==0){
										$('.proddesc').css({
							   				'background-color': 'white',
							 				  "color" : 'white'
												});
										$('.initimage').css({
							   				'background-color': '#A8A8A8',
							 				  "color" : 'black'
												});
										$('#textdescription').show();
										$('#installimage').hide();
									}else{
										$('#textdescription').hide();
										$('#installimage').show();
										$('.proddesc').css({
							   				'background-color': '#A8A8A8',
							 				  "color" : 'black'
												});
										$('.initimage').css({
							   				'background-color': 'white',
							 				  "color" : 'white'
												});
									
									}

								}
									</script>

									<!--Brand: <?php echo $this->Html->link($product['Brand']['name'], array('controller' => 'brands', 'action' => 'view', 'slug' => $product['Brand']['slug'])); ?>

									<br />

									Category: <?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', 'slug' => $product['Category']['slug'])); ?>---->

									<br />

								</div>


							</div>
						

			</div>
				<div width="100%"  >
									<divwidth="100%" >
									<table width="100%" height="400px" border="1">
										<tr height="10%">
											<td  class="proddesc" align="center"  style="background-color:white" > <h4 ><a href="#" onclick="switchtabs('0'); return false;">PRODUCT DESCRIPTION</a><h4>
											</td>
											<td class="initimage" align="center" style="background-color:#A8A8A8"> <h4 ><a href="#" onclick="switchtabs('1'); return false;">INSTALLATION IMAGES</a><h4>
											</td>
										</tr>
										<tr height="90%">
											<td colspan="2" style="background-color:white">
													<div id="textdescription" style="padding:30px;">
															<?php echo $product['Product']['description']; ?>

													</div>
														<div id="installimage" style="padding:30px;">
															<img  src="<?php echo $this->webroot; ?>img/Vehicle_Position_Image.jpg"  width="100%" alt="Slide 3">
													</div>
											</td>
										</tr>

									</table>
								</div>
								</div>
			
		</td>
	</tr>
</table>



