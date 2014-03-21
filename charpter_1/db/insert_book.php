<html>
<head>
	<title>Book-O-Rama Book Entry Results</title>
</head>
<body>
	<h1>Book-O-Rama Book Entry Results</h1>
	<?php 
	$isbn = $_POST['isbn'];
	$author = $_POST['author'];
	$title = $_POST['title'];
	$price = $_POST['price'];
	
	if(!$isbn || !$author || !$title || !$price){
		echo 'You hava not enterd search details. Please go back and try again.';
		exit;
	}
	if(!get_magic_quotes_gpc()){
		$isbn = addslashes($isbn);
		$author = addslashes($author);
		$title = addslashes($title);
		$price = addslashes($price);
	}
	@ $db = new mysqli('127.0.0.1', 'book', '123456', 'book');
	if(mysqli_connect_errno()){
		echo 'Error:Could not connetct to database. Please try again later.';
		exit;
	}
	
	$query = "insert into books values ('".$isbn."','".$author."','".$title."','".$price."')";
	$result = $db->query( $query);
	if($result) {
		echo $db->affected_rows."book inserted into database.";
	}
	else{
		echo "An error has occurred. The item was not added.";
	}

	$db->close();
		
	?>
</body>
</html>