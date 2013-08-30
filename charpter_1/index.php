<html>
<head>
	<title>Demo</title>
    <meta http-equiv=Content-Type content="text/html;charset=utf-8">	
</head>
<body>

<?php
	$products = array(
		array(
			'Code'=>'TIR',
			'Description' => 'Tires',
			'Price' => 100
		),
		array(
			'Code'=>'OIL',
			'Description' => 'Oil',
			'Price' => 10
		)	
	);
	for($row = 0; $row < 2; $row++){
		echo '|'.$products[$row]['Code'].'|'.$products[$row]['Description'].'|'.$products[$row]['Price'].'|<br />';
	}	
?>

</body>
</html>