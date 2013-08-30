<html>
<head>
	<title>Uploading...</title>
</head>
<body>
	<h1>Uploading file ... </h1>
	<?php 
		if($_FILES['userfile']['error']>0)
		{
			echo 'Problem:';
			switch ($_FILES['userfile']['error'])
			{
				case 1: echo'File exceeded upload_max_filesize';
						break;
				case 2: echo'File exceeded max_file_size';
						break;
				case 3: echo'File only partially upload';
						break;
				case 4: echo'No file uploaded';
						break;
				case 6: echo'Cannot upload file:No temp directory specified';
						break;
				case 7: echo'Upload failed:Cannot write to disk';
						break; 	
			}
			exit;
		}
	
	
	?>
</body>
</html>