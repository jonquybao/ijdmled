

<br />
<div class="row">
	<div class="col-sm-3"></div>
<div class="col-sm-3">
	<h1>Login</h1>
<!---
<?php echo $this->Form->create('User', array('action' => 'login')); ?>

<?php echo $this->Form->button('Login', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>---->

<form name="input" action="http://www.zetaphirhotechnology.com/ijdmled/users/login" method="post">
Username: <input class="form-control" type="text" name="username">
Password: <input class="form-control" type="password" name="password"><br>
<input type="submit" class="btn btn-primary" value="Login">

</form>
<br />
<br />
<br />
</div>
	<div class="col-sm-3"></div>
</div>