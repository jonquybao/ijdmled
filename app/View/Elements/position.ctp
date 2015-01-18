        <?php $this->startIfEmpty('position'); ?>
<div class="position">

<?php
  $positions = $this->requestAction('positions/index'); 
 
?>
<style>
#somebox4{
	 float: left;
	width:100%;
	height:150px;	
	background-color:white;
	
}
#somebox4 ul li {
  list-style-position: inside;
  padding:15px;
   float: left;
   width:220px;
}
</style>
<h4>SELECT POSITION</h4>


<div id="somebox4">
	<table width="100%">
		<tr>
			<td width="50%">
<ul>
	<?php 

	foreach ($positions as $position):
	
	 ?>
	
		<li><a href="#" class="position_hover" id="<?php echo $position['Position']['id'];  ?>" onclick="send('<?php echo $position['Position']['id'];  ?>','position','<?php echo $position['Position']['name']; ?>' )"><?php echo $position['Position']['name']; ?></a></li>
	
	<?php 
	
	endforeach; 
	?>
</ul></td>
<td width="50%">
	<img class="backup" src="<?php echo $this->webroot; ?>img/Backup_Reverse_Light.jpg"  width="100%" alt="Slide 3">
	<img class="door" src="<?php echo $this->webroot; ?>img/Door_Courtesy_Light.jpg"  width="100%" alt="Slide 3">
	<img class="fog" src="<?php echo $this->webroot; ?>img/Fog_Light.jpg"  width="100%" alt="Slide 3">
	<img class="head" src="<?php echo $this->webroot; ?>img/Head_Light.jpg"  width="100%" alt="Slide 3">
	<img class="interior" src="<?php echo $this->webroot; ?>img/Interior_Dome_Light.jpg"  width="100%" alt="Slide 3">
	<img class="license" src="<?php echo $this->webroot; ?>img/License_Plate_Light.jpg"  width="100%" alt="Slide 3">
	<img class="parking" src="<?php echo $this->webroot; ?>img/Parking_Position_Light.jpg"  width="100%" alt="Slide 3">
	<img class="sidemarker" src="<?php echo $this->webroot; ?>img/Side_Marker_Light.jpg"  width="100%" alt="Slide 3">
	<img class="turn" src="<?php echo $this->webroot; ?>img/Turn_Signal_Light.jpg"  width="100%" alt="Slide 3">
	</td>
</tr>
</table>
</div>
<br />
</div>
<?php $this->end(); ?>