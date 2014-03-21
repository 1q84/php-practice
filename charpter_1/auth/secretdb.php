<?php 
	$name = $_POST['name'];
	$password = $_POST['password'];
	if((!isset($name))||(!$password)){
		
?>
	<h1>Please Log in</h1>
	<p>This page is secret.</p>
	<form action="secretdb.php" method="post">
		<p>Username: <input type="text" name="name"/></p>
		<p>Password: <input type="text" name="password"/></p>
		<p><input type="submit" name="submit" value="Log In"/></p>
		
	</form>

<?php 
	}else{
		$mysql = mysqli_connect('127.0.0.1', 'webauth', 'webauth');
		if(!$mysql){
			echo "Cannot connect to database.";
			exit;
		}
		$selected = mysqli_select_db($mysql, 'auth');
		if(!$selected){
			echo "Cannot select database.";
			exit;
		}
		$query = "select count(*) from authorized_users where name ='".$name."' and password = '".$password."'";
		$result = mysqli_query($mysql, $query);
		if(!$result){
			echo "Cannot run query.";
			exit;
		}
		$row = mysqli_fetch_row($result);
		$count = $row[0];
		if($count > 0){
			echo "<h1>Here It is!</h1>
			  <p>I bet you are glad you can see this secret page.</p>";
		}else{
			echo "<h1>Go Away!</h1>
			  <p>You are not authorized to use this resource.</p>";
		}
	}
?>