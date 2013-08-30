<html>
<head>
	<title>Book-O-Rama Search Results</title>
</head>
<body>
	<h1>Book-O-Rama Search Results</h1>
	<?php 
		$searchtype = $_POST['searchtype'];
		$searchterm = $_POST['searchterm'];
		
		if(!$searchtype || !$searchterm){
			echo 'You hava not enterd search details. Please go back and try again.';
			exit;
		}
		if(!get_magic_quotes_gpc()){
			$searchtype = addslashes($searchtype);
			$searchterm = addslashes($searchterm);
		}
		@ $db = new mysqli('127.0.0.1', 'book', '123456', 'book');
		if(mysqli_connect_errno()){
			echo 'Error:Could not connetct to database. Please try again later.';
			exit;
		}
		
		$query = "select * from books where ".$searchtype." like'%".$searchterm."%'";
		$result = $db->query( $query);
		$num_results = $result->num_rows;
		
		echo '<p>Number of books found: '.$num_results."</p>";
		
		for($i=0;$i<$num_results;$i++){
			$row = $result->fetch_assoc();
			echo "<p><strong>".($i+1)."Title: ";
			echo htmlspecialchars_decode(stripslashes($row['title']));
			echo "</strong><br />Author: ";
			echo stripslashes($row['author']);
			echo "<br />ISBN: ";
			echo stripslashes($row['isbn']);			
			echo "<br />Price: ";
			echo stripslashes($row['price']);
			echo "</p>";
		}
		$result->free();
		$db->close();
	?>
</body>
</html>