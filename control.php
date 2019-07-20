<html>
<head>
<title>Control Page</title>
</head>
<body bgcolor="grey">
<p align="center"><img src="/webcam/?action=stream"/>
<?php
  $valve_status = shell_exec("sudo /usr/bin/python /var/www/html/relay.py status");
  if ($valve_status == 1): ?>
     <p align="center"><font size="30">Water is ON</font>
  <?php elseif ($valve_status == 0): ?>
     <p align="center"><font size="30">Water is OFF</font>
  <?php else: ?>
     <p align="center"><font size="30" color="red">Error getting valve status</font>
<?php endif; ?>
<form method="post" action="trigger.php">
        <h1 align="center"><font size="40">
	<p><input type="radio" value="on" name="control" style="width: 20em; height: 20em" />ON
	<p><input type="radio" value="off" name="control" style="width: 20em; height: 20em" />OFF
	<p><button type="submit" name="go" style="width: 20em; height: 10em"><font size="40">GO!</font></button>
        </font>
        </h1>
</form>
</html>
