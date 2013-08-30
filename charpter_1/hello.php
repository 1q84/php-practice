<html>
    <head>
        <title>Demo</title>
    </head>
    <body>
        <?php
        $products=array(
        	'Code'=>'TIR',
			'Description' => 'Tires',
			'Price' => 100
        );
        extract($products);
        echo '$Code';
        ?>
    </body>
</html>