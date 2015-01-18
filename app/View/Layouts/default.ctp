<?php 
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title_for_layout; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800' rel='stylesheet' type='text/css'>
<?php echo $this->Html->css(array( 'bootstrap.css','css.css')); ?>
<lin1k rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<!--[if lt IE 9]><?php echo $this->Html->script(array('html5shiv.js', 'respond.min.js')); ?><![endif]-->
<?php echo $this->Html->script(array('bootstrap.min.js', 'js.js')); ?>
<?php echo $this->App->js(); ?>
<?php echo $this->fetch('meta'); ?>
<?php echo $this->fetch('css'); ?>
<?php echo $this->fetch('script'); ?>
<script>
$(document).ready(function(){
	
					$('.category').hide( );
					$('.bulb').hide(  );
					$('.manufacturer').hide(  );
					$('.position').hide(  );

		function hide_all(){
					$('.backup').hide(  );
					$('.door').hide(  );
					$('.interior').hide(  );
					$('.license').hide(  );
					$('.turn').hide(  );
					$('.parking').hide(  );
					$('.sidemarker').hide(  );
					$('.fog').hide(  );
					$('.head').hide(  );
				}
						hide_all();
		$('.interior').show(  );

$( ".position_hover" ).hover(
	 function() {
//alert( this.id);
	hide_all();
	if(this.id ==1){
	
		$('.interior').show(  );

	}else if (this.id ==2) {
		$('.turn').show(  );
	}
	else if (this.id ==3) {
		$('.head').show(  );
	}
	else if (this.id ==4) {
		$('.fog').show(  );
	}
	else if (this.id ==5) {
		$('.door').show(  );
	}
	else if (this.id ==6) {
		$('.license').show(  );
	}
	else if (this.id ==7) {
		$('.backup').show(  );
	}else if (this.id ==8) {
		$('.sidemarker').show(  );
	}
});


		
	


	
	
});

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', '<?php echo Configure::read('Settings.ANALYTICS'); ?>', '<?php echo Configure::read('Settings.DOMAIN'); ?>');
	ga('send', 'pageview');
	
   	$('.open').click(function(){
   		
	});

	$( ".target" ).click(function() {
  		alert( "Handler for .click() called." );
	});
	var current =0;
	var state=0;
	var cstate=0;
	var mstate=0;
	var pstate=0;
	var bstate=0;
	var togggletab=0;



	function minimize(section){

		if(section =='c'){
			if(cstate ==0){
				$('.catexpand').hide(  );
				$(".cattitle").html("CATEGORY &#9660;");
				cstate=1;
			}else{
				$('.catexpand').show( );
				$(".cattitle").html("CATEGORY &#9650;");
				cstate=0;
			}
		}
		if (section =='m') {

			if(mstate ==0){
				$('.manexpand').hide( );
				$(".mantitle").html("MANUFACTURER &#9660;");
				mstate=1;
			}else{
				$('.manexpand').show(  );
				$(".mantitle").html("MANUFACTURER &#9650;");
				mstate=0;
			}
		}
		if (section =='b') {

			if(bstate ==0){
				$('.bulbexpand').hide( );
				$(".bulbtitle").html("BULB SIZE &#9660;");
				bstate=1;
			}else{
				$('.bulbexpand').show(  );
				$(".bulbtitle").html("BULB SIZE &#9650;");
				bstate=0;
			}
		}
		if (section =='p') {
			if(pstate ==0){
				$('.posexpand').hide();
				$(".postitle").html("POSITION &#9660;");
				pstate=1;
			}else{
				$('.posexpand').show( );
				$(".postitle").html("POSITION &#9650;");
				pstate=0;
			}

		}

		
	}
	function expand(index){
	
	
		if(state==0)
		{
			state=1;
		}
		else{
			state=0;
		}
		if( !$('.menu_options').is(':visible')||(current==index)){
		 	$('.menu_options').slideToggle('slow');
		  
		 }			switch (index)
  			{
 				case 0:
					$('.category').show(  );
					$('.bulb').hide( );
					$('.manufacturer').hide(  );
					$('.position').hide( );
					break;
 				case 1:
					$('.manufacturer').show(  );
					$('.bulb').hide( );
					$('.category').hide(  );
					$('.position').hide(  );
					break;
				case 2:
					$('.bulb').show(  );
					$('.manufacturer').hide(  );
					$('.category').hide(  );
					$('.position').hide(  );
					break;
				case 3:
					$('.position').show(  );
					$('.manufacturer').hide( );
					$('.category').hide( );
					$('.bulb').hide( );
					break;
 				 default:
					$('.bulb').hide( );
					$('.manufacturer').hide(  );
					$('.category').hide(  );
					$('.position').hide(  );
 			 }
		
			current=index;
	}

	
	function send(msg, cat, name, action){

			document.getElementById("query").action=action;
					document.getElementById(cat).value = msg;
					document.getElementById("object-name").value = name;
					
					document.getElementById("query").submit();

		
			
	}

	function start(){
		<?php 

		 	if(!empty($_POST["ledcategory"])){
		 		echo "document.getElementById('".$_POST["object-name"]."').style.backgroundColor='gray';";
		 	/*	echo "document.getElementById('ledcategory').value = '".$_POST["ledcategory"]."';";*/
			}

			if(!empty($_POST["manufacturer"])){
		 		echo "document.getElementById('".$_POST["object-name"]."').style.backgroundColor='gray';";
		 		/*echo "document.getElementById('manufacturer').value = '".$_POST["manufacturer"]."';";*/
			}

			if(!empty($_POST["bulbsize"])){
		 		echo "document.getElementById('".$_POST["object-name"]."').style.backgroundColor='gray';";
		 		/*echo "document.getElementById('bulbsize').value = '".$_POST["bulbsize"]."';";*/
			}

			if(!empty($_POST["position"])){
		 		echo "document.getElementById('".$_POST["object-name"]."').style.backgroundColor='gray';";
		 		/*echo "document.getElementById('position').value = '".$_POST["position"]."';";*/
			}
		 ?>
			// $('.spin').hide( "slow");
		 	// $('#prodcontent').show( "slow" );
	
	
	}


	$('.catexpand').hide( );
	$('.manexpand').hide( );
	$('.bulbexpand').hide( );
	$('.posexpand').hide( );


</script>
<style>
.el08 { /* Change width and height */
width:1.3em;
height:1.3em;
}
.modal {
    /*display:    none;
   
   // z-index:    1000;*/ position:   fixed;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url('<?php echo $this->webroot; ?>img/ajax-loader.gif') 
                50% 50% 
                no-repeat;
}
#installimage{
display:none;
}

   


</style>

 
<?php if($this->Session->check('Shop')) : ?>
<script type="text/javascript">
$(document).ready(function(){
	$('#cartbutton').show();
	
	// Window load event used just in case window height is dependant upon images

	
});
		
</script>

<?php endif; ?>

</head>
<body onLoad="start()">

<form  id="query" action="http://www.zetaphirhotechnology.com/ijdmled/products/shop" method="post">
 	<input type="hidden" name="ledcategory" id="ledcategory" value="">
  	<input type="hidden" name="manufacturer" id="manufacturer" value="">
   	<input type="hidden" name="bulbsize" id="bulbsize" value="">
   	 <input type="hidden" name="position" id="position"  value="">
   	  <input type="hidden" name="object-name"  id="object-name"  value="">
   	

</form>
       

	<div class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="bgheader">
		<div class="container">
			<div class="toppart">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
           
				<a class="navbar-brand" href="<?php echo $this->Html->url('/'); ?>"><img  src="<?php echo $this->webroot; ?>img/mainlogo.png" width="250" height="60" alt="Slide 3">
 </td><td width="50px"></td><td></a>
                
			</div>
				<center><div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
              	
					<li  style="margin-top:35px"><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'shop')); ?></li>
					  <li><span style="margin-left:50px"></li>
              <li style="margin-top:35px"><?php echo $this->Html->link('About Us', array('controller' => 'aboutus', 'action' => 'index')); ?></li>
          <!--   - <li><?php echo $this->Html->link('Brands', array('controller' => 'brands', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?></li>
                    	<li><?php echo $this->Html->link('Manufacturers', array('controller' => 'manufacturers', 'action' => 'index')); ?></li>---->

            <!-- <li><div class="imagelink">
  			  <a href="#" ><img  src="<?php echo $this->webroot; ?>css/img/twitter_red.png" width="50" height="50" alt="Slide 3"> </a>
				</div></li>
                 <li><div class="imagelink">
  			  <a href="#" ><img  src="<?php echo $this->webroot; ?>css/img/facebook_min_gray.fw.png" width="50" height="50" alt="Slide 3"> </a>
				</div></li>---->
          <li><span style="margin-left:50px"></li>
                    <li  style="margin-top:35px"><a href="<?php echo $this->Html->url('/admin'); ?>">Login</a></li>
				</ul>
				<ul class="navbar-form form-inline navbar-right" style="margin-top:45px">
					<?php echo $this->Form->create('Product', array('type' => 'GET', 'url' => array('controller' => 'products', 'action' => 'search'))); ?>

					<?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'class' => 'input-sm', 'autocomplete' => 'off')); ?>
					<?php echo $this->Form->button('', array('div' => false, 'class' => 'btn btn-sm btn-primary search_icon')); ?>
					&nbsp;
					<span id="cartbutton" style="display:none;">
					<?php echo $this->Html->link('Shopping Cart', array('controller' => 'shop', 'action' => 'cart'), array('class' => 'btn btn-sm btn-success')); ?>
					</span>
					<?php echo $this->Form->end(); ?>
				</ul>
			</div></center>   
         
           
             </div>
		</div>
		 <div >
            
        
           
           
           
           
            </div>	</div>
                <table width="100%" class="centertable" border="3">
           	 <tr>
             	<td width="25%" align="center" class="categories"> <a href="#" class="open" onclick="expand(0);">CATEGORY</a></td>
                <td width="25%" align="center" class="categories"> <a href="#"  onclick="expand(1);">MANUFACTURER</a></td>
                <td width="25%" align="center" class="categories"> <a href="#"  onclick="expand(2);">BULB SIZE</a></td>
                <td width="25%" align="center" class="categories">  <a href="#"  onclick="expand(3);">BY POSITION</a></td>
           	 </tr>
            </table>

   <?php  echo $this->element('manufacturer'); ?>
   <?php  echo $this->element('bulb'); ?>
   <?php  echo $this->element('position'); ?>
   <?php  echo $this->element('category'); ?>


  

<div class="container">
	<div class="content" style="background-color:white;    border-style: solid; border-width: 1px;">
		
		<div class="menu_options">
  <?php echo $this->fetch('manufacturer');  ?>
  <?php echo $this->fetch('bulb'); ?>
  <?php echo $this->fetch('position');  ?>
  <?php echo $this->fetch('category'); ?>
            </div>
			<?php echo $this->Session->flash(); ?>
		
             
			<!---<ul class="breadcrumb">
				<?php //echo $this->Html->link('Home', array('controller' => 'products', 'action' => 'index')); ?> / <?php echo $this->Html->getCrumbs(' / '); ?>
			</ul>---->
			<?php echo $this->fetch('content'); ?>
			<!---<br />
			<div id="msg"></div>
			<br />---->
		</div>
	</div>

	

		<div class="container" style="">
			<table width="100%" style="padding:10px; background-color:white; height:200px;border-style: solid; border-width: 1px;   border-top-width: 0px;">
 		<tr>
 				<td width="30%" valign="top"  style="padding:10px;">

 					<a href="https://www.facebook.com/pages/Ijdmled/322898884559425"><img  src="<?php echo $this->webroot; ?>img/black_facebook.png"  height="30px" alt="Slide 3"></a>
 					<a href="https://twitter.com/ijdmled"><img  src="<?php echo $this->webroot; ?>img/black_instagram.png"  height="30px" alt="Slide 3"></a>
 					<a href="http://instagram.com/ijdmled"><img  src="<?php echo $this->webroot; ?>img/black_twitter.png"  height="30px" alt="Slide 3"></a>
 				</td>
 				<td width="70%" align="right"  valign="top" style="padding:10px;">
 				<p>
 					<span style="color:gray; margin-left:30px;"><?php echo $this->Html->link('Home', array('controller' => 'products', 'action' => 'view')); ?></span>
 					<span style="color:gray; margin-left:30px;"><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'shop')); ?></span>
 					<span style="color:gray; margin-left:30px;"><?php echo $this->Html->link('About Us', array('controller' => 'aboutus', 'action' => 'index')); ?></span>
                                        <span style="color:gray; margin-left:30px;"><?php echo $this->Html->link('Contact Us', array('controller' => 'contactus', 'action' => 'index')); ?></span>
 					<span style="color:gray; margin-left:30px;"><?php echo $this->Html->link('FAQ', array('controller' => 'faq', 'action' => 'index')); ?></span>
 					<span style="color:gray; margin-left:30px;"><?php echo $this->Html->link('Shipping', array('controller' => 'shipping', 'action' => 'index')); ?></span>
	             	<span style="color:gray; margin-left:30px;"><?php echo $this->Html->link('Privacy', array('controller' => 'privacy', 'action' => 'index')); ?></span></p>
 				</td>
 		</tr>
 		
 	</table>
 
 <div class="footer" id ="footer">
 	<table width="100%" style="padding:10px;">
 		<tr>
 				<td width="50%"  style="padding:10px;"><span style="color:white">Copy Right 2014 iJDMLed</span>
 				</td>
 				<td width="50%" align="right"  style="padding:10px;">
 					
	              	<span style="color:white">Subscribe to iJDMLED</span> 
	              	<span style="margin-left:40px">
	              	<input type="text" style="border:none; height:25px;"placeholder=" Join our mailing list">
	              	<input type="submit" style="background-color:black; font-size:18px; font-family:space; color:white; border:none;" value="JOIN"/>
	             
 				</td>
 		</tr>
 		
 	</table>
			 

 
		</div>
        <br />
            	<br />
	</div>

	<!---<div class="debug">
		<?php  echo $this->element('sql_dump'); ?>
	</div>---->

</body>
</html>