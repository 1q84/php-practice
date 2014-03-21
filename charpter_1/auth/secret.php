<?php 
	$name = $_POST['name'];
	$password = $_POST['password'];
	if((!isset($name))||(!$password)){
		
?>
	<h1>Please Log in</h1>
	<p>This page is secret.</p>
	<form action="secret.php" method="post">
		<p>Username: <input type="text" name="name"/></p>
		<p>Password: <input type="text" name="password"/></p>
		<p><input type="submit" name="submit" value="Log In"/></p>
		
	</form>

<?php 
	}else if(($name=='user')&&($password=='pass')){
		echo "<h1>Here It is!</h1>
			  <p>I bet you are glad you can see this secret page.</p>";
	}else{
		echo "<h1>Go Away!</h1>
			  <p>You are not authorized to use this resource.</p>";
	}
?>