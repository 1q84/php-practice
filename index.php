<html>
<head>
	<title>Say Hi</title>
</head>
<body>

<?php
require dirname(__FILE__) . '/KLogger.php';
$log   = KLogger::instance(dirname(__FILE__), KLogger::DEBUG);
$log->logInfo("This is a demo.");
?>

</body>
</html>