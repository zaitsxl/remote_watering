<html>
<head>
<title>Control Page</title>
</head>
<body bgcolor="grey">
<p align="center"><img src="/webcam/?action=stream"/>
<p align="center"><font size="30">Water: 
<?php
  $valve_status = shell_exec("sudo /usr/bin/python /var/www/html/relay.py status");
  if ($valve_status == 1): ?>
     <font color="red">ON</font>
  <?php elseif ($valve_status == 0): ?>
     <font color="green">OFF</font>
  <?php else: ?>
     <font color="red">ERROR</font>
<?php endif; ?>
<p align="center"><font size="30">Power:
<?php
     $power_status = shell_exec("sudo /sbin/apcaccess | grep STATUS | awk '{ print $3 }'");
     $bat_charge = shell_exec("sudo /sbin/apcaccess | grep BCHARGE | awk '{ print $3 }'");
     if (strpos($power_status, "ONLINE") !== false): ?>
     <font color="green">LINE
     <?php elseif (strpos($power_status, "ONBATT") !== false): ?>
     <font color="red">BATTERY <?php echo "$bat_charge %"; ?>
     <?php else: ?>
     <font color="red">ERROR
<?php endif;
     echo "</font>"; ?>
<form method="post" action="trigger.php">
        <h1 align="center"><font size="40">
	<p><input type="radio" value="on" name="control" style="width: 20em; height: 20em" />ON
	<p><input type="radio" value="off" name="control" style="width: 20em; height: 20em" />OFF
	<p><button type="submit" name="go" style="width: 20em; height: 10em"><font size="40">GO!</font></button>
        </font>
        </h1>
</form>
</html>
