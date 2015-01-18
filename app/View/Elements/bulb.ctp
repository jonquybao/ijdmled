        <?php $this->startIfEmpty('bulb'); ?>
<div class="bulb">

<?php
  $bulbsizes = $this->requestAction('bulbsizes/index'); 
 
?>
<style>
#somebox3{
	 float: left;
	width:100%;
	height:150px;	
	background-color:white;
	
}
#somebox3 ul li {
  list-style-position: inside;
  padding:15px;
   float: left;
   width:220px;
}
</style>
<h4>SELECT BULB SIZES</h4>

<div id="somebox3">
<ul>
	<?php 

	foreach ($bulbsizes as $bulbsize):
	
	 ?>
	
		<li><a href="#" onclick="send('<?php echo $bulbsize['Bulbsize']['id'];  ?>','bulbsize','<?php echo $bulbsize['Bulbsize']['size']; ?>')"><?php echo $bulbsize['Bulbsize']['size']; ?></a></li>
	
	<?php 
	
	endforeach; 
	?>
</ul>

</div>
<br />

</div>
<?php $this->end(); ?>