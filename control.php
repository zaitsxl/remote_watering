<?php
$ip = getHostByName(getHostName());
?>
<html>
<head>
<title>Control Page</title>
</head>
<body>
<p><img src="http://<?php echo $_SERVER['SERVER_ADDR']; ?>:8080?action=stream\"/>'
<p><h1>Choose an action</h1>
<form method="post" action="trigger.php">
	<input type="radio" value="on" name="control" />ON
	<input type="radio" value="off" name="control" />OFF
	<input type="submit" />
</form>
</html>
