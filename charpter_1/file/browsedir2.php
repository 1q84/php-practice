<html>
<head>
	<title>Browse Directories</title>
</head>

<body>
<h1>Browsing</h1>
<?php 
	$dir = dir('uploads/');
	echo "<p>Handle is $dir</p>";
	echo "<p>Upload directory is $dir->path</p>";
	echo '<p>Directory Listing:</p><ul>';
	
	while (false !==($file = $dir->read())){		
		if($file!="."&&$file!="..")
		{
			echo "<li>$file</li>";
		}
	}
	echo "</ul>";
	$dir->close();
?>
</body>
</html>