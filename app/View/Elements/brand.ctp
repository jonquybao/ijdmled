        <?php $this->startIfEmpty('brand'); ?>
<div class="brand">
<?php
  $brands = $this->requestAction('brands/index'); 
 
?>
<style>
#somebox{
	 float: left;
	width:320px;
	height:200px;	
	background-color:white;

	border-right:solid #000000;
}
	

#somebox ul li {
  list-style-position: inside;
   float: left;
   width:120px;
}
.images {
 padding:15px;
  float: left;
}

</style>
<h4>SELECT BRAND</h4>

<div id="somebox">
<ul>
	<?php 

	foreach ($brands as $brand):
	
	 ?>
	
		<li><a href="http://www.zetaphirhotechnology.com/ijdmled/brand/<?php echo $brand['Brand']['name']; ?>"><?php echo $brand['Brand']['name']; ?></a><!---	<?php echo $this->Html->link($brand['Brand']['name'], array('action' => 'view', 'slug' => $brand['Brand']['slug'])); ?>---></li>

	<?php 
	
	endforeach; 
	?>

</ul>
</div>

<!---<div class="imagelogos">
<center><?php 

	foreach ($manufacturers as $manufacturer):
	
	 ?>
	
		<div class= "images"><img src="<?php echo $this->webroot; ?>img/<?php echo $manufacturer['Manufacturer']['image']; ?>" width="50", height="50"/></div>
	
	<?php 
	
	endforeach; 
	?>
    </center>
</div>---->
<br />
</div>

<?php $this->end(); ?>