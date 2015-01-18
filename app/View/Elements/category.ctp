
        <?php $this->startIfEmpty('category'); ?>
<div class="category">

<?php
  $ledcategories = $this->requestAction('ledcategories/index'); 
 
?>
<style>
#somebox1{
	 float: left;
	width:100%;
	height:150px;	
	background-color:white;
	
}
#somebox1 ul li {
  list-style-position: inside;
   float: left;
   padding:15px;
   width:220px;
}
</style>
<h4>SELECT CATEGORY</h4>

<div id="somebox1">
<ul>
	<?php 

	foreach ($ledcategories as $ledcategory):
	
	 ?>
	
		<li><a href="#"  class="link" onclick="send('<?php echo $ledcategory['Ledcategory']['id']; ?>','ledcategory','<?php echo $ledcategory['Ledcategory']['name']; ?>')" style="padding-top:10px;"><?php echo $ledcategory['Ledcategory']['name']; ?></a></li>
	
	<?php 
	
	endforeach; 
	?>
</ul>

</div>
<br />

</div>
<?php $this->end(); ?>