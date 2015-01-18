        <?php $this->startIfEmpty('manufacturer'); ?>
<div class="manufacturer">
<?php
  $manufacturers = $this->requestAction('manufacturers/index'); 
 
?>
<style>
#somebox{
	 float: left;
	 padding-top:20px; 
	width:100%;
	height:200px;	
	background-color:white;

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
<h4>SELECT MANUFACTURER</h4>

<div id="somebox">
<ul>
	<?php 

	foreach ($manufacturers as $manufacturer):
	
	 ?>
	<!---<a width="50px" height="50px" href="#" onclick="send('<?php echo $manufacturer['Manufacturer']['id']; ?>','manufacturer','<?php echo $manufacturer['Manufacturer']['name']; ?>')" style="  background-image:url('http://www.zetaphirhotechnology.com/<?php echo $this->webroot; ?>img/manufacturer/<?php echo $manufacturer['Manufacturer']['image']; ?> - black.jpg'); width:50px; height:50px;"></a>---->
		<li style="width:150px;padding-bottom:10px;"><img src="<?php echo $this->webroot; ?>img/manufacturer/<?php echo $manufacturer['Manufacturer']['image']; ?> - black.jpg" width="50", height="50"/><span style="margin-left:15px;"><a href="#" onclick="send('<?php echo $manufacturer['Manufacturer']['id']; ?>','manufacturer','<?php echo $manufacturer['Manufacturer']['name']; ?>')" ><?php echo $manufacturer['Manufacturer']['name']; ?></a></li>
	
	<?php 
	
	endforeach; 
	?>

</ul>
</div>
<!---
<div class="imagelogos">
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