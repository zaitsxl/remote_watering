<?php
$ip = getHostByName(getHostName());
?>
<html>
<p><img src="http://<?php echo $ip; ?>:8080?action=stream"/>
<p><h1>
<?php
shell_exec("sudo /usr/bin/python /var/www/html/relay.py ".$_POST["control"]);
echo $_POST["control"];
?>
</h1></p>
</html>
