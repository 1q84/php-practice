<?php
	$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
?>
<html>
<head>
	<title>Bob's Auto Parts - Customer Orders</title>
    <meta http-equiv=Content-Type content="text/html;charset=utf-8">	
	</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Customer Orders</h2>
	<?php 
// 		@$fp = fopen("$DOCUMENT_ROOT/orders/city_credit_data.txt", 'rb');
// 		if(!$fp){
// 			echo "<p><strong>No orders pending.Please try again later.</strong></p>";
// 			exit;
// 		}
// 		while (!feof($fp)){
// 			$order = fgets($fp,999);
// 			echo $order."<br />";
// 		}	
		$orders = file("$DOCUMENT_ROOT/charpter_1/orders/city_credit_data.txt");
		$number_of_orders = count($orders);
		if($number_of_orders == 0){
			echo "<p><strong>No orders pending.Please try again later.</strong></p>";
		}
		echo "<table border = \"1\"\n>";
		echo "<tr><th bgcolor=\"#CCCCFF\">City</th>
				  <th bgcolor=\"#CCCCFF\">Name</th>
				  <th bgcolor=\"#CCCCFF\">Address</th>
				  <th bgcolor=\"#CCCCFF\">Start Time</th>
				  <th bgcolor=\"#CCCCFF\">Done Time</th>
			  </tr>";
		for($i=0;$i<$number_of_orders;$i++){
			$line = explode("\t", $orders[$i]);
			echo "<tr>
			  		<td>".$line[0]."</td>
					<td align=\"right\">".$line[1]."</td>
					<td align=\"right\">".$line[2]."</td>
					<td align=\"right\">".$line[3]."</td>
					<td align=\"right\">".$line[4]."</td>
				</tr>";
		}
		echo "</table>";
	?>
</body>
</html>